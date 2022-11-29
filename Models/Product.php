<?php declare(strict_types=1);
namespace Models;

use Drivers\IElasticSearchDriver;
use Drivers\IMySQLDriver;
use Service\AccessLogService;

class Product implements IMySQLDriver, IElasticSearchDriver {

    /**
     * @param $id
     * @param bool $useMysql
     * @return array
     */
    public static function getById($id,bool $useMysql = false): array {
        if( $useMysql ) return ( new Product )->findProduct($id);
        else return ( new Product )->findById($id);
    }

    /**
     * @param $id
     * @return array
     */
    public function findById( $id ): array {
        return [
            'id' => $id,
            'name' => 'product_'.$id,
            'created' => time(),
            'updated' => time()
        ];
    }

    /**
     * @param $id
     * @return array
     */
    public function findProduct( $id ): array {
        return [
            'id' => $id,
            'name' => 'product_'.$id,
            'created' => time(),
            'updated' => time()
        ];
    }

}
