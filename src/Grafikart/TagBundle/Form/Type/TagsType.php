<?php

namespace Grafikart\TagBundle\Form\Type;

use Doctrine\DBAL\Types\TextType;
use Grafikart\TagBundle\Form\DataTransformer\TagsTransformer;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TagsType extends AbstractType {

   public function buildForm(FormBuilderInterface $builder, array $options)
   {
       $builder
           ->addModelTransformer(new CollectionToArrayTransformer(), true)
           ->addModelTransformer(new TagsTransformer(), true);

   }


    public function getParent()
    {
        return TextType::class;
    }
}