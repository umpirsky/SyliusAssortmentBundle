<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Fluid\Option;

/**
 * Option set interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface OptionSetInterface
{
    function getOptions();
    function setOptions($options);
    function addOption(OptionInterface $option);
    function removeOption(OptionInterface $option);
    function hasOption(OptionInterface $option);
}
