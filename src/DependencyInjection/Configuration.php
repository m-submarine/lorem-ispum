<?php

namespace Leland\LoremIpsumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\BooleanNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;


class Configuration implements ConfigurationInterface
{
    
    public function getConfigTreeBuilder () {

        $treeBuilder = new TreeBuilder('leland_lorem_ipsum');
        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC for symfony/config < 4.2
            $rootNode = $treeBuilder->root('leland_lorem_ipsum');
        }

        $rootNode
            ->children()
                ->append($this->addUnicorn())
            ->end()
        ;

        return $treeBuilder;
    }

    private function addUnicorn (): BooleanNodeDefinition {
        $node = new BooleanNodeDefinition('unicorn');
        $node->defaultTrue();

        return $node;
    }
}