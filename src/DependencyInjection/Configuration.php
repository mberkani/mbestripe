<?php

declare(strict_types=1);

namespace Mberkani\SyliusMbestripePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('mberkani_sylius_mbestripe_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
