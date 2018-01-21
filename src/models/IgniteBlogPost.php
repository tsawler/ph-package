<?php namespace Tsawler\Phpackage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IgniteBlogPost
 * @package Tsawler\Phpackage
 */
class IgniteBlogPost extends Model
{

    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var string
     */
    protected $connection = 'ignite';

    /**
     * @return \Illuminate\Database\Connection
     */
    public function getConnection()
    {
        return static::resolveConnection('mysqlignite');
    }

}
