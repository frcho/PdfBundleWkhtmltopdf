<?php

namespace kijhoTechnologies\PdfBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class kijhoTechnologiesPdfExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('kijhoTechnologies_pdf.basepath', $config['basepath']);
        $container->setParameter('kijhoTechnologies_pdf.binary', $config['binary']);
        $container->setPArameter('kijhoTechnologies_pdf.options', $config['options']);

        $jsConverter = 'kijhoTechnologies.pdf.js_to_html';

        if ($config['inline']) {
            $cssConverter = 'kijhoTechnologies.pdf.css_to_html';
        } else {
            $cssConverter = 'kijhoTechnologies.pdf.css_path_to_url';
        }

        $container->setDefinition(
            'kijhoTechnologies.pdf.generator',
            new Definition(
                'kijhoTechnologies\PdfBundle\Generator\PdfGenerator',
                array(
                    new Reference($cssConverter),
                    new Reference($jsConverter),
                    new Reference('knp.snappy.pdf'),
                    new Reference('templating'),
                    new Reference('logger'),
                )
            )
        );
    }
}
