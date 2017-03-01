<?php

namespace AppBundle\Form\Type;

use Genemu\Bundle\FormBundle\Form\JQuery\Type\Select2Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;


class GroupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add(
                'roles',
                CollectionType::class,
                array(
                    'entry_type'   => TextType::class,
                    'allow_add'    => true,
                    'allow_delete' => true,
                )
            )
//            ->add('users', Select2EntityType::class, [
//                'multiple' => true,
//                'remote_route' => 'admin_users_select',
//                'class' => 'AppBundle\Entity\User',
//                'placeholder' => 'Select a user',
//            ])

//            ->add(
//                'users',
//                EntityType::class,
//                array(
//                    'class'        => 'AppBundle:User',
//                    'choice_label' => 'username',
//
//
//                )
//            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Group',
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_admin_groups';
    }
}
