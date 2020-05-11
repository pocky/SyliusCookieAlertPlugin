<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Cookie Alert Plugin</h1>

<p align="center">Add a simple cookie alert to your shop</p>

## Warning

This plugin is only for Sylius 1.7.x because it uses the new template events architecture. The following instructions are compatible with [Bootstrap and Webpack Encore](https://docs.sylius.com/en/latest/theming/bootstrap-theme.html?highlight=bootstrap). This plugin is in beta.

## Installation

1. Install [Sylius](https://docs.sylius.com/en/latest/book/installation/installation.html)
2. Add the bundle and dependencies in your `composer.json`

`composer require black/sylius-cookie-alert-plugin:^1.0.0@dev`

3. Register the bundle:

```php
<?php

// config/bundles.php

return [
    // ...
    Black\SyliusCookieAlertPlugin\BlackSyliusCookieAlertPlugin::class => ['all' => true],
];
```

4. Import the configuration

```yaml
# config/packages/sylius_cookie_alert.yaml
imports:
    - { resource: "@BlackSyliusCookieAlertPlugin/Resources/config/app/config.yml" }
```

5. Add the cookie-alert javascript dependency `yarn add bootstrap-cookie-alert`
6. Add the cookie-alert dependency in your main javascript file

```js
  require('bootstrap-cookie-alert/cookiealert');
```

7. Add the cookie alert dependency in your main scss file

```scss
@import '~bootstrap-cookie-alert/cookiealert.css';
```

## Usage

This plugin adds a new block in `sylius.shop.layout.after_body` with `src/Resources/views/_cookieAlert.html.twig`. Feel free to change this behavior, override the template but I think you should use events...

```yaml
sylius_ui:
    events:
        sylius.shop.layout.after_body:
            blocks:
                cookie:
                    template: "@BlackSyliusCookieAlertPlugin/_cookieAlert.html.twig"
                    priority: 1
```

## License and Copyright

tl;dr:
- Modifications must be shared,
- It's possible to use this plugin in a commercial project,
- A commercial license is available.

This project is licensed under [EUPL-1.2](https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12). This license implies that if you modify this plugin, you must share those modifications (like AGPL). However, the EUPL-1.2 license applies only on this plugin and this is not viral (like LGPL).

If you don't want to follow this or do not want to use EUPL-1.2 licensed software, you must buy commercial license. [Contact us](docs/SUPPORT.md) for more information.

## Credits
Created by [Alexandre Balmes](https://alexandre.balmes.co).

## Sponsors
This project was made possible thanks to the support of:

[![Vanoix.com](https://vanoix.com/assets/vanoix125.png "Vanoix gives me some time")](https://vanoix.com)
