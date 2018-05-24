<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 23/05/18
 * Time: 16:26
 */

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('phoneNumber');
        $builder->add('birthDate', BirthdayType::class);
        $builder->add('isACertifiedPilot');
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType' ;
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}