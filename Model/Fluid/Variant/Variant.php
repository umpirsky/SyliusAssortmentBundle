<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Fluid\Variant;

/**
 * Model for product variants.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
abstract class Variant implements VariantInterface
{
    /**
     * Variant SKU.
     *
     * @var string
     */
    protected $sku;

    /**
     * Option values.
     *
     * @var array
     */
    protected $options;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->options = array();
    }

    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * {@inheritdoc}
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * {@inheritdoc}
     */
    public function countOptions()
    {
        return count($this->options);
    }
}
