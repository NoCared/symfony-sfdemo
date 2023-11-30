<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('nom')
            ->add('description')
            ->add('lieux');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // $params = $this->getDoctrine()->getRepository('AppBundle:Params')->findAll();
        // $choices = array();
        // foreach ($params as $p) {
        //     // key will be used as option value, value as option title
        //     $choices[$p->getAbbr1()] = $p->getAbbr1();
        //     $choices[$p->getAbbr2()] = $p->getAbbr2();
        // }
        // $form = $this->createForm(myform::class, array(), array('abbrChoices' => $choices));
        
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
