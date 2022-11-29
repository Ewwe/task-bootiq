<?php
require( __DIR__.'/Controllers/ProductController.php');
require( __DIR__.'/Service/AccessLogService.php');
require( __DIR__.'/Service/CacheService.php');
require( __DIR__.'/Drivers/IElasticSearchDriver.php');
require( __DIR__.'/Drivers/IMySQLDriver.php');
require( __DIR__.'/Models/Product.php');

use Controllers\ProductController;


echo (new ProductController)->detail(144235987);