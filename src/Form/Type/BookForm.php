<?php


use App\Controller\AuthorController;
use App\Entity\Authors;
use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\Persistence\ManagerRegistry;

class BookForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
//            ->add('author', TextType::class)
            ->add('author', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array(
                'class' => Authors::class,
                'choice_label' => function(?Authors $authors) {
                    return $authors ? $authors->getAutors() : '';
                },
            ))

            ->add('title', TextType::class)
            ->add('image', \Symfony\Component\Form\Extension\Core\Type\FileType::class)
            ->add('year', TextType::class)
            ->add('save', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}