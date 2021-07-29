<?php
declare(strict_types=1);

namespace Black\SyliusCookieAlertPlugin\DependencyInjection;

use Sylius\Bundle\ResourceBundle\DependencyInjection\Extension\AbstractResourceExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

final class BlackSyliusCookieAlertExtension extends AbstractResourceExtension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration($this->getConfiguration([], $container), $config);
        $loader = new PhpFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $this->registerResources('black_sylius_cookie_alert', $config['driver'], $config['resources'], $container);

        $loader->load('services.php');
    }
}
