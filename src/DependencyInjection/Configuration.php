<?php

namespace Harentius\FacebookBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('harentius_facebook');

        $rootNode
            ->children()
                ->scalarNode('app_id')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('app_secret')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('graph_version')->defaultValue('v2.6')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
