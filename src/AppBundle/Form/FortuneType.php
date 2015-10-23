<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FortuneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('content')
            ->add('submit', 'submit')
            ->add('categorie', 'choice', array(
    'choices' => array('Humour' => 'Humour', 'Animaux' => 'Animaux'),
));
  //           ->add('categorie', 'choice', array(
  //     'choice_list' => new ChoiceList(
  //         array('Humour', 'Animaux', 'Argent', 'Enfants', 'Travail', 'Santé', 'Inclassable'),
  //         array('Humour', 'Animaux', 'Argent', 'Enfants', 'Travail', 'Santé', 'Inclassable')
  //     )
  //))



    }



    /**
     * @return string
     */
    public function getName()
    {
        return  'Fortune';
    }

}
