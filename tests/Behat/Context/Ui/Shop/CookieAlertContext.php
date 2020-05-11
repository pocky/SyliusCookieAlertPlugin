<?php

declare(strict_types=1);

namespace Tests\Acme\SyliusExamplePlugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use Sylius\Behat\Page\Shop\HomePageInterface;
use Tests\Black\SyliusCookieAlertPlugin\Behat\Page\Shop\HomePage;
use Webmozart\Assert\Assert;

final class CookieAlertContext implements Context
{
    /** @var HomePageInterface */
    private $homePage;

    public function __construct(HomePage $homePage)
    {
        $this->homePage = $homePage;
    }

    /**
     * @Then I should see cookie alert
     */
    public function iShouldSeeCookieAlert(): void
    {
        Assert::true($this->homePage->getCookieAlert());
    }
}
