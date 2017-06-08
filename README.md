# Magento 2 Message Queue Example
Simple implementation example for [Rcason_Mq](https://github.com/renatocason/magento2-module-mq).

This module is just a proof of concept and an easy example to get started with message queues.
It's not useful in ral life by any mean.

## Installation
1. Require the module via Composer
```bash
$ composer require renatocason/magento2-module-mq-example
```

2. Enable the module
```bash
$ bin/magento module:enable Rcason_MqExample
$ bin/magento setup:upgrade
```

## Usage
1. Check that everything is properly configured
```bash
$ bin/magento ce_mq:queues:list
```
_product.updates_ should appear in the list if available queues.
2. Launch the consumer (and leave it running)
```bash
$ bin/magento ce_mq:consumers:start product.updates
```
3. Tail _system.log_
```bash
$ tail -f var/log/system.log
```
4. Open a product in the admin and save it
5. A message regarding the product you saved will appear in the logs

## Authors, contributors and maintainers

Author:
- [Renato Cason](https://github.com/renatocason)

## License
Licensed under the Open Software License version 3.0
