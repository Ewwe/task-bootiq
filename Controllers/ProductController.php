<?php declare( strict_types=1 );
namespace Controllers;

use Service\AccessLogService;
use Service\CacheService;

class ProductController {
    const PRODUCT_LOG_FILE = __DIR__ . '/../product.log';

    /**
     * @param string $id
     * @return string
     */
    public function detail( string $id ): string {
        AccessLogService::plainTextIncrement( self::PRODUCT_LOG_FILE, $id);
        return CacheService::getProduct($id);
    }




}