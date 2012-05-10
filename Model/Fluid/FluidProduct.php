<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Fluid;

use Sylius\Bundle\AssortmentBundle\Model\Fluid\Property\PropertyInterface;
use Sylius\Bundle\AssortmentBundle\Model\Product;

/**
 * Default model implementation of FluidProductInterface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
abstract class FluidProduct extends Product implements FluidProductInterface
{
    /**
     * Product type.
     *
     * @var string
     */
    protected $type;

    /**
     * All you need to store outsite product description.
     * For searching purposes perhaps.
     *
     * @var array
     */
    protected $properties;

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    public function addProperty(PropertyInterface $property)
    {
        if (!$this->hasProperty($property)) {
            $this->properties[] = $property;
        }
    }

    public function removeProperty(PropertyInterface $property)
    {
        if ($this->hasProperty($property)) {
            $key = array_search($property, $this->properties);
            unset($this->properties[$key]);
        }
    }

    public function hasProperty(PropertyInterface $property)
    {
        return in_array($property, $this->properties);
    }
}
