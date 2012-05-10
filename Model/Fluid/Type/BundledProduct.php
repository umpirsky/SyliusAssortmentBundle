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
use Sylius\Bundle\AssortmentBundle\Model\ProductInterface;

/**
 * Bundled product type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class BundledProduct extends FluidProduct
{
    /**
     * Bundled products.
     *
     * @var array
     */
    protected $products;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->type = FluidProductInterface::TYPE_BUNDLED;
    }

    /**
     * Get bundled products.
     *
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set bundled products.
     *
     * @param array $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * Add product to bundle.
     *
     * @param ProductInterface $product
     */
    public function addProduct(ProductInterface $product)
    {
        if (!$this->hasProduct($product)) {
            $this->products[] = $product;
        }
    }

    /**
     * Remove product from bundle.
     *
     * @param ProductInterface $product
     */
    public function removeProduct(ProductInterface $product)
    {
        if ($this->hasProduct($product)) {
            $key = array_search($product, $this->products);
            unset($this->products[$key]);
        }
    }

    /**
     * Check if given product is in bundle.
     *
     * @param ProductInterface $product
     *
     * @return Boolean
     */
    public function hasProduct(ProductInterface $product)
    {
        return in_array($product, $products);
    }
}
