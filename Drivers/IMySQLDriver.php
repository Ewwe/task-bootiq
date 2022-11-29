<?php declare(strict_types=1);
namespace Drivers;

interface IMySQLDriver
{
    public function findProduct( $id );
}