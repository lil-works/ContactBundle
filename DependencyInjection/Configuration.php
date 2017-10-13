<?php

namespace Lilworks\ContactBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lil_works_contact');

        $rootNode
            ->children()
            ->arrayNode('options')
            ->children()
            ->booleanNode('captcha')->end()
            ->booleanNode('dbpersist')->end()
            ->booleanNode('sendmail')->end()
            ->end()
            ->end() // options
            ->end()
        ;

        return $treeBuilder;
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
