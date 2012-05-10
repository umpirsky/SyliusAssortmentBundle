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
 * Default model implementation of FluidProductInterface.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class OptionSet implements OptionSetInterface
{
    /**
     * Options in given option set.
     *
     * @var array
     */
    protected $options;

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function addOption(OptionInterface $option)
    {
        if (!$this->hasOption($option)) {
            $this->options[] = $option;
        }
    }

    public function removeOption(OptionInterface $option)
    {
        if ($this->hasOption($option)) {
            $key = array_search($option, $this->options);
            unset($this->options[$key]);
        }
    }

    public function hasOption(OptionInterface $option)
    {
        return in_array($option, $this->options);
    }
}
