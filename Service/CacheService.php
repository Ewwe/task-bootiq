<?php declare(strict_types=1);
namespace Service;

use Models\Product;

class CacheService {

    const PATH = __DIR__ . '/../Cache/';

    /**
     * @param string $id
     * @param bool $useMysql
     * @return string
     */
    public static function getProduct(string $id,bool $useMysql = false): string {
        if( file_exists( self::PATH . 'product_'.$id )) {
            return file_get_contents( self::PATH . 'product_'.$id);
        }else{
            $product = Product::getById($id,$useMysql);
            file_put_contents( self::PATH . 'product_'.$id,json_encode($product));
            return json_encode($product);
        }
    }
}