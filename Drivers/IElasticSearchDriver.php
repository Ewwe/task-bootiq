<?php declare(strict_types=1);
namespace Drivers;

interface IElasticSearchDriver
{
    public function findById( $id );
}