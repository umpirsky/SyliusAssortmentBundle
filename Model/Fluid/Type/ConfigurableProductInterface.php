<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Fluid\Type;

use Sylius\Bundle\AssortmentBundle\Model\Fluid\FluidProductInterface;
use Sylius\Bundle\AssortmentBundle\Model\Fluid\Variant\VariantInterface;

/**
 * Configurable product type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface ConfigurableProductInterface extends FluidProductInterface
{
    function getOptionSet();
    function setOptionSet(OptionSetInterface $optionSet);
    function getVariants();
    function setVariants($variants);
    function addVariant(VariantInterface $variant);
    function removeVariant(VariantInterface $variant);
    function hasVariant(VariantInterface $variant);
}
