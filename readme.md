#PH Package

## Use this in production

* Add the repository to composer.json:


~~~~
"repositories": [
    {
      "type": "vcs",
      "url": "git@bitbucket.org:tsawler/ph-package.git"
    }
    ],
    "require": {
~~~~

* Add the package in composer.json

~~~~
    "torann/geoip": "^1.0",
    "tsawler/phpackage": "dev-master",
    "unisharp/laravel-filemanager": "^1.8",
~~~~

* run composer update
* run php artisan:vendor publish

## Setup Instructions for development

1. Install a new Laravel 5.5 app
2. Clone this package
3. Put contents of this package into laravel app at this location: <root>/packages/tsawler/phpackage
4. Add this the the app's composer.json file:

~~~~
"autoload": {
    "classmap": [
        "database/seeds",
        "database/factories"
    ],
    "psr-4": {
        "App\\": "app/",
        "Tsawler\\Phpackage\\": "packages/tsawler/phpackage/src"
    }
},
~~~~

_For development only_, you need to add this to config/app.php:

~~~~
   Tsawler\Phpackage\PHPackageServiceProvider::class,
~~~~


Run composer update


