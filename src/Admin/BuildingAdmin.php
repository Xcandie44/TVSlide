<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;

final class BuildingAdmin extends AbstractAdmin
{

    protected $parentAssociationMapping = 'slides';

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//			->add('id')
			->add('name',null, ['label'=> 'Название'])
			->add('url')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//			->add('id')
			->add('name',null, ['label'=> 'Название'])
			->add('url')
			->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
                'label' => 'Действие'

            ]);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
//			->add('id')
			->add('name',null, ['label'=> 'Название'])
			->add('url');




    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
//			->add('id')
			->add('name')
			->add('url')
			;
    }
}
