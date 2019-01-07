<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ArticleAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
			//->add('id')
			->add('titre')
			->add('capture')
			->add('datepub')
			->add('contenu')
			;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
			//->add('id')
			->add('titre')
			->add('capture')
			->add('datepub')
			->add('contenu')
			->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
			//->add('id')
			->add('titre')
			->add('capture')
			->add('datepub')
			->add('contenu')
			;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
			//->add('id')
			->add('titre')
			->add('capture')
			->add('datepub')
			->add('contenu')
			;
    }
}
