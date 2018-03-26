<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit298718b743a61fc544d9f522f1e1cd20
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'EDDDripApi' => __DIR__ . '/../..' . '/includes/drip/drip.php',
        'EDD_Drip_Logging' => __DIR__ . '/../..' . '/includes/edd-drip-logging.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit298718b743a61fc544d9f522f1e1cd20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit298718b743a61fc544d9f522f1e1cd20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit298718b743a61fc544d9f522f1e1cd20::$classMap;

        }, null, ClassLoader::class);
    }
}
