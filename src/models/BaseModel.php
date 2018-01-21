<?php namespace Tsawler\Phpackage;

/**
 * Class BaseModel
 * @package Tsawler\Phpackage
 */
class BaseModel extends \Illuminate\Database\Eloquent\Model
{

    /**
     * @return \Illuminate\Database\Connection
     */
    public function getConnection()
    {
        return static::resolveConnection('mysqlignite');
    }
}
