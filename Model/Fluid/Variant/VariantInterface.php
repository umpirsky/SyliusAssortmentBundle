<?php

/*
 * This file is part of the Sylius package.
 *
 * (c); Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Fluid\Variant;

/**
 * Configurable product variant interface.
 * Combination of product options with specific attributes for them.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface VariantInterface
{
    /**
     * Get variant SKU.
     *
     * @return string
     */
    function getSku();

    /**
     * Set variant SKU.
     *
     * @param string $sku
     */
    function setSku($sku);

    /**
     * Returns all option values.
     *
     * @return array An array or collection of OptionValueInterface
     */
    function getOptions();

    /**
     * Sets all variant options.
     *
     * @param array $options An array or collection of OptionValueInterface
     */
    function setOptions(array $options);

    /**
     * Counts all variant options.
     *
     * @return integer
     */
    function countOptions();
}
