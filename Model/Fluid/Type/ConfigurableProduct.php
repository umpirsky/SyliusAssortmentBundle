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

use Sylius\Bundle\AssortmentBundle\Model\Fluid\FluidProduct;
use Sylius\Bundle\AssortmentBundle\Model\Fluid\Variant\VariantInterface;

/**
 * Simple product type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class ConfigurableProduct extends FluidProduct
{
    /**
     * Set of options that this product takes.
     *
     * @var array
     */
    protected $optionSet;

    /**
     * Configurations of this product.
     * Basically, every combination of options.
     *
     * @var array
     */
    protected $variants;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->type = FluidProductInterface::TYPE_CONFIGURABLE;
        $this->Configurations = array();
    }

    public function getOptionSet()
    {
        return $this->optionSet;
    }

    public function setOptionSet(OptionSetInterface $optionSet)
    {
        $this->optionSet = $optionSet;
    }

    public function getVariants()
    {
        return $this->varants;
    }

    public function setVariants($variants)
    {
        $this->variants = $variants;
    }

    public function addVariant(VariantInterface $variant)
    {
        if (!$this->hasVariant($variant)) {
            $this->variants[] = $variant;
        }
    }

    public function removeVariant(VariantInterface $variant)
    {
        if ($this->hasVariant($variant)) {
            $key = array_search($variant, $this->variants);
            unset($this->variants[$key]);
        }
    }

    public function hasVariant(VariantInterface $variant)
    {
        return in_array($variant, $this->variants);
    }
}
