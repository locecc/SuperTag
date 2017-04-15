<?php

namespace Grafikart\TagBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class TagsTransformer implements DataTransformerInterface
{
    public function transform($value)
    {
        dump($value);
        return "";
    }

    public function reverseTransform($value)
    {
        // TODO: Implement reverseTransform() method.
    }
}