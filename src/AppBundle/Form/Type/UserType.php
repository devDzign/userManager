<?php

namespace AppBundle\Form\Type;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\BooleanFilterType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('username', null, array('label' => "Nom d'utilisateur"))
            ->add('email', null, array('required' => false, 'label' => 'E-mail'))
            ->add(
                'plainPassword',
                RepeatedType::class,
                array(
                    'type'            => PasswordType::class,
                    'invalid_message' => 'Les mots de passe doivent être identiques.',
                    'required'        => $options['passwordRequired'],
                    'first_options'   => array('label' => 'Mot de passe'),
                    'second_options'  => array('label' => 'Répétez le mot de passe'),
                )
            )
            ->add(
                'groups',
                EntityType::class,
                array(
                    'label'    => 'Groupes',
                    'multiple' => true,
                    'expanded' => false,
                    'required' => false,
                    'class'    => 'AppBundle\Entity\Group',
                    'attr'=>[
                        'class'=>'demo2'
                    ]
//                    'attr'=>[
//                        'data-toggle'=>'toggle'
//                    ]
                )
            )
            ->add(
                'enabled',
                CheckboxType::class,
                array(
                    'required' => false,
                    'label'    => 'Vérouiller le user',
                    'attr'=>[
                        'data-toggle'=>'toggle',
                        'data-on'=>'Oui',
                        'data-off'=>'Non',
                        'data-onstyle'=>'success',
                        'data-offstyle'=>'danger',
                        'data-style'=>'ios'
                    ]
                )
            );
        if ($options['lockedRequired']) {
            $builder->add(
                'locked',
                CheckboxType::class,
                array(
                    'required' => false,
                    'label'    => 'Vérouiller le compte',
                    'attr'=>[
                        'data-toggle'=>'toggle',
                        'data-on'=>'Oui',
                        'data-off'=>'Non',
                        'data-onstyle'=>'success',
                        'data-toggle'=>'toggle',
                        'data-on'=>'Oui',
                        'data-off'=>'Non',
                        'data-onstyle'=>'success',
                        'data-offstyle'=>'danger',
                        'data-style'=>'ios'
                    ]
                )
            );
        };
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class'       => 'AppBundle\Entity\User',
                'passwordRequired' => true,
                'lockedRequired'   => false,
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_admin_users';
    }
}
