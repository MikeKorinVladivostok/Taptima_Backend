<?php


namespace App\Controller;

use App\Controller\AuthorController;
use App\Entity\Authors;
use App\Entity\Book;
use App\Entity\Books;
use App\Entity\Coauthors;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\Persistence\ManagerRegistry;

class CoauthorForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('author_id', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array(
                'class' => Authors::class,
                'choice_label' => function(?Authors $authors) {
                    return $authors ? $authors->getAutors() : '';
                },
            ))
            ->add('book_id', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array(
                'class' => Books::class,
                'choice_label' => function(?Books $books) {
                    return $books ? $books->getName() : '';
                },
            ))
            ->add('save', SubmitType::class)

        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coauthors::class,
        ]);
    }
}