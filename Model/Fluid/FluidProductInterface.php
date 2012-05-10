<?php

/*
 * This file is part of the Sylius package.
 *
 * (c); Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Fluid;

use Sylius\Bundle\AssortmentBundle\Model\Fluid\Property\PropertyInterface;
use Sylius\Bundle\AssortmentBundle\Model\ProductInterface;

/**
 * Fluid product interface for ODM based implementations.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface FluidProductInterface extends ProductInterface
{
    /**
     * Default supported product types.
     */
    const TYPE_SIMPLE       = '_simple';
    const TYPE_CONFIGURABLE = '_configurable';
    const TYPE_BUNDLED      = '_bundled';

    /**
     * Get product type.
     *
     * @return string
     */
    function getType();

    /**
     * Set product type.
     *
     * @param string $type
     */
    function setType($type);

    function getProperties();
    function setProperties($properties);
    function addProperty(PropertyInterface $property);
    function removeProperty(PropertyInterface $property);
    function hasProperty(PropertyInterface $property);
}
