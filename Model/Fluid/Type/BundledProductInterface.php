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
use Sylius\Bundle\AssortmentBundle\Model\ProductInterface;

/**
 * Bundled product type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface BundledProductInterface extends FluidProductInterface
{
    function getProducts();
    function setProducts($products);
    function addProduct(ProductInterface $product);
    function removeProduct(ProductInterface $product);
    function hasProduct(ProductInterface $product);
}
