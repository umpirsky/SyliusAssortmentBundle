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
 * Option.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class Option implements OptionInterface
{
    protected $name;
    protected $presentation;
    protected $values;

    public function __construct()
    {
        $this->values = array();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPresentation()
    {
        return $this->presentation;
    }

    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setValues(array $values)
    {
        $this->values = $values;
    }

    public function addValue($value)
    {
        if (!$this->hasValue($value)) {
            $this->values[] = $value;
        }
    }

    public function removeValue($value)
    {
        if ($this->hasValue($value)) {
            $key = array_search($value, $this->values);
            unset($this->values[$key]);
        }
    }

    public function hasValue($value)
    {
        return in_array($value, $this->values);
    }
}
