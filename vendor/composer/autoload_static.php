<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91d3c79c1e3f87d3d44ea973e566e821
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'MP' => __DIR__ . '/..' . '/mercadopago/sdk/lib/mercadopago.php',
        'MPRestClient' => __DIR__ . '/..' . '/mercadopago/sdk/lib/mercadopago.php',
        'MercadoPagoException' => __DIR__ . '/..' . '/mercadopago/sdk/lib/mercadopago.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91d3c79c1e3f87d3d44ea973e566e821::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91d3c79c1e3f87d3d44ea973e566e821::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit91d3c79c1e3f87d3d44ea973e566e821::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit91d3c79c1e3f87d3d44ea973e566e821::$classMap;

        }, null, ClassLoader::class);
    }
}
