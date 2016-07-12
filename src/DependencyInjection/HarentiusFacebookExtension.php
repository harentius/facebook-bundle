<?php

namespace Harentius\FacebookBundle\DependencyInjection;

use Facebook\Facebook;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class HarentiusFacebookExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $definition = new Definition(Facebook::class, [
            [
                'app_id' => $config['app_id'],
                'app_secret' => $config['app_secret'],
                'default_graph_version' => $config['graph_version'],
            ],
        ]);
        $container->setDefinition('harentius.facebook', $definition);
    }
}
