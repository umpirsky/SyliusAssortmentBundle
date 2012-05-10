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

/**
 * Simple product type.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SimpleProduct extends FluidProduct
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->type = FluidProductInterface::TYPE_SIMPLE;
    }
}
