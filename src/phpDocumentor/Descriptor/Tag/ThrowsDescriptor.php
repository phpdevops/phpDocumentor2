<?php
namespace phpDocumentor\Descriptor\Tag;

use phpDocumentor\Descriptor\TagDescriptor;
use phpDocumentor\Reflection\DocBlock\Tag;

class ThrowsDescriptor extends TagDescriptor
{
    protected $types;

    public function __construct(Tag\ThrowsTag $reflectionTag)
    {
        parent::__construct($reflectionTag);

        $this->types = $reflectionTag->getTypes();
    }

    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }
}
