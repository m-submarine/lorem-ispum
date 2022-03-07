<?php

namespace Leland\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;


class Configuration implements ConfigurationInterface
{
    
    public function getConfigTreeBuilder () {

        $treeBuilder = new TreeBuilder('leland_loremipsum');
        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC for symfony/config < 4.2
            $rootNode = $treeBuilder->root('leland_loremipsum');
        }

        $rootNode
            ->children()
                ->scalarNode('host')->defaultValue('localhost')->isRequired()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }

}