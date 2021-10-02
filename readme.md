[![ExtDN M2 Coding Standard](https://github.com/eugene-petrov/magento2-observer/actions/workflows/coding-standard.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-observer/actions/workflows/coding-standard.yml)
[![ExtDN M2 Mess Detector](https://github.com/eugene-petrov/magento2-observer/actions/workflows/mess-detector.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-observer/actions/workflows/mess-detector.yml)
[![ExtDN M2 PHPStan](https://github.com/eugene-petrov/magento2-observer/actions/workflows/phpstan.yml/badge.svg?branch=main)](https://github.com/eugene-petrov/magento2-observer/actions/workflows/phpstan.yml)

***Snippet_Observer***

_Example task:_ You need redirect all frontend pages to a contact form page

To enable this module execute:
- php bin/magento --clear-static-content module:enable Snippet_Observer
- php bin/magento setup:upgrade
