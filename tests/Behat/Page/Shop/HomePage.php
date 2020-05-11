<?php

declare(strict_types=1);

namespace Tests\Black\SyliusCookieAlertPlugin\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

class HomePage extends BaseHomePage
{
    public function getCookieAlert()
    {
        return $this
            ->getElement('body')
            ->find('css', '[data-black-cookie-alert]')->getValue();
    }
}
