<?php

declare(strict_types=1);

namespace Black\Tests\SyliusCookieAlertPlugin\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

class HomePage extends BaseHomePage
{
    public function getCookieAlert()
    {
        return $this
            ->hasElement('cookie_alert');
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'cookie_alert' => '[data-test-cookie-alert]',
        ]);
    }
}
