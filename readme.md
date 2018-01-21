#PH Package

This code is only useful with Verilion blender app. You probably won't find a use for it.

## Use this in production

1. composer require tsawler/phpackage
2. run composer update
3. run php artisan:vendor publish

## Setup Instructions for development

1. Install a new blender 5.5 app
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


