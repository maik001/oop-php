<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b7abf168513b42ffa6c16db3480743a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b7abf168513b42ffa6c16db3480743a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b7abf168513b42ffa6c16db3480743a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b7abf168513b42ffa6c16db3480743a::$classMap;

        }, null, ClassLoader::class);
    }
}