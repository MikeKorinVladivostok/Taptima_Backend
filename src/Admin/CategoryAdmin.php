<?php

// src/Admin/CategoryAdmin.php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class CategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper) :void
    {
        $formMapper->add('name', TextType::class);
        $formMapper->add('author', TextType::class);
        $formMapper->add('title', TextType::class);
        $formMapper->add('image', TextType::class);
        $formMapper->add('year', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)  :void
    {
        $datagridMapper->add('name');
        $datagridMapper->add('author');
        $datagridMapper->add('title');
        $datagridMapper->add('year');
    }

    protected function configureListFields(ListMapper $listMapper)  :void
    {
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('author');
        $listMapper->addIdentifier('title');
        $listMapper->addIdentifier('image');
        $listMapper->addIdentifier('year');
    }
}