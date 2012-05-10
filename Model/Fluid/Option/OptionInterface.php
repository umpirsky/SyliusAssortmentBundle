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
 * Option interface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface OptionInterface
{
    function getName();
    function setName($name);
    function getPresentation();
    function setPresentation($presentation);
    function getValues();
    function setValues(array $values);
    function addValue($value);
    function removeValue($value);
    function hasValue($value);
}
