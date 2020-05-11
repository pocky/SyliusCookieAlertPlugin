<?php
declare(strict_types=1);

namespace Black\SyliusCookieAlertPlugin\DependencyInjection;

use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;
use Sylius\Component\Resource\Factory\Factory;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Black\SyliusCookieAlertPlugin\Form\Type\PopupType;
use Black\SyliusCookieAlertPlugin\Form\Type\SlideTranslationType;
use Black\SyliusCookieAlertPlugin\Form\Type\SlideType;
use Black\SyliusCookieAlertPlugin\Entity\Popup;
use Black\SyliusCookieAlertPlugin\Entity\PopupInterface;
use Black\SyliusCookieAlertPlugin\Entity\Slide;
use Black\SyliusCookieAlertPlugin\Entity\SlideInterface;
use Black\SyliusCookieAlertPlugin\Entity\SlideTranslation;
use Black\SyliusCookieAlertPlugin\Entity\SlideTranslationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('black_sylius_cookie_alert_plugin');
        if (\method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            $rootNode = $treeBuilder->root('black_sylius_cookie_alert_plugin');
        }

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->scalarNode('driver')->defaultValue(SyliusResourceBundle::DRIVER_DOCTRINE_ORM)->end()
            ->end();

        $this->addResourcesSection($rootNode);

        return $treeBuilder;
    }

    private function addResourcesSection(ArrayNodeDefinition $node): void
    {
        $node
            ->children()
                ->arrayNode('resources')
                    ->addDefaultsIfNotSet()

                    ->end()
                ->end()
            ->end();
    }
}
