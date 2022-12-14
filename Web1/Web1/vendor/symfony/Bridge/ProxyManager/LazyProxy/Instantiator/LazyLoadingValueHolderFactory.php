<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\ProxyManager\LazyProxy\Instantiator;

//use ProxyManager\Factory\LazyLoadingValueHolderFactory as BaseFactory;
use ProxyManager\ProxyGenerator\ProxyGeneratorInterface;
use Symfony\Bridge\ProxyManager\LazyProxy\PhpDumper\LazyLoadingValueHolderGenerator;

/**
 * @internal
 */
class LazyLoadingValueHolderFactory //extends BaseFactory
{
    private $generator;

    /**
     * {@inheritdoc}
     */
    public function getGenerator(): ProxyGeneratorInterface
    {
        return $this->generator ?: $this->generator = new LazyLoadingValueHolderGenerator();
    }
}
