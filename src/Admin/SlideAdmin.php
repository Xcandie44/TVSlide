<?php

namespace App\Admin;

use App\Entity\Slide;
use App\Services\UploadService;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelListType;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\Form\Type\DatePickerType;
use Sonata\Form\Type\DateTimePickerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Sonata\AdminBundle\Route\RouteCollection;

final class SlideAdmin extends AbstractAdmin
{
    protected $datagridValues = [

        // reverse order (default = 'ASC')
        '_sort_order' => 'desc',

        // name of the ordered field (default = the model's id field, if any)
        '_sort_by' => 'priority',
    ];


    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('increase_priority', $this->getRouterIdParameter() . '/increase-priority');
        $collection->add('decrease_priority', $this->getRouterIdParameter() . '/decrease-priority');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('id')
              ->add('title')
//            ->add('file');
//            ->add('priority')
//            ->add('isActive');
              ->add('buildings');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//            ->add('id')
            ->add('title',null, ['label'=> 'Заголовок'])
            ->add('url', null, [
                'template' => 'Admin/image_list_view.html.twig',
                'label' => 'Предпросмотр'
            ])
//            ->add('priority')
            ->add('isActive', null, [
                'editable' => true,
                'label' => 'Вкл/выкл'


            ])
            ->add('buildings', null, array(
                'class' => 'Entity/Building',
                'associated_property' => 'name',
                'label' => 'Зданния в которых видны'
            ))
            ->add('showFrom', null,[
                'label'=> 'Показывать в период',
                'template' => 'Admin/date_list_view.html.twig'

            ])
            ->add('_action', null, [
                'actions' => [
                    'increase' => [
                        'template' => 'Admin/CRUD/list__action_increase_priority.html.twig'
                    ],
                    'decrease' => [
                        'template' => 'Admin/CRUD/list__action_decrease_priority.html.twig'
                    ],
                    'show' => [],
                    'edit' => [],
                    'delete' => []

                ],
                'label' => 'Действие'

            ]);
    }


    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
            ->with('Общая информация о слайде', ['class' => 'col-md-4'])
            ->add('title', null,['label'=> 'Заголовок']);

        if ($this->isCurrentRoute('create'))
            $formMapper
                ->add('file', FileType::class, ['label'=> 'Файл для загрузки']);

        $formMapper
            ->end()
            ->with('Здания в которых данный слайд будет показан', ['class' => 'col-md-4'])
            ->add('buildings', ModelType::class, [
                    'multiple' => true,
                    'expanded' => true,
                    'by_reference' => false,
                    'label' => 'Здания'
                ]
            )
            ->end()
            ->with('Период показа', ['class' => 'col-md-4'])
            ->add('showFrom', null,['label'=>'Показать с'])
            ->add('showFor', null, ['label'=>'Показывать до'])
            ->end();

        if ($this->isCurrentRoute('create')) {
            $formMapper
                ->getFormBuilder()
                ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                    /** @var UploadService $service */
                    $service = $this->getConfigurationPool()->getContainer()->get('app.uploader');
                    /** @var Slide $data */
                    $data = $event->getData();

                    /** @var Request $request */
                    $request = $this->getRequest();
                    $uniqid = $request->query->get('uniqid');
                    /** @var UploadedFile $file */
                    $file = $request->files->all()[$uniqid]['file'];

                    $isSaved = $service->saveFile($file, $data);

                    if (!$isSaved) {
                        $event->stopPropagation();
                    }
                });
        };


    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
//            ->add('id')
            ->add('title',null, ['label'=> 'Заголовок'])
//            ->add('file')
            ->add('priority',null, ['label'=> 'Приоритет'])
            ->add('isActive',null, ['label'=> 'Вкл/выкл'])
//            ->add('isVideo',null, ['label'=> 'Заголовок'])
            ->add('buildings',null, ['label'=> 'Здания в которых отображается']);
    }


}
