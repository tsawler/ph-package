<?php namespace Tsawler\Phpackage;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class PHPackageServiceProvider
 * @package Tsawler\Phpackage
 */
class PHPackageServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *c
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/phpackage.php' => config_path('phpackage.php'),
        ]);
        $this->loadRoutesFrom(__DIR__ . '/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'phpackage');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->setConnection();
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     * Allow for connection to other DB
     * Params are set in .env:
     * DB_IGNITE_DATABASE=
     * DB_IGNITE_USERNAME=
     * DB_IGNITE_PASSWORD=
     */
    public function setConnection()
    {
        $connection = config('phpackage.defaultDB');

        if ($connection !== 'default') {
            $con = config('phpackage.connections.' . $connection);
        } else {
            $connection = config('database.default');
            $con = config('database.connections.' . $connection);
        }

        Config::set('database.connections.mysqlignite', $con);
    }
}
