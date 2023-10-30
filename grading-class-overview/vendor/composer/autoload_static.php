<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67d094b7395d470dee83bfe140a1aed9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit67d094b7395d470dee83bfe140a1aed9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67d094b7395d470dee83bfe140a1aed9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67d094b7395d470dee83bfe140a1aed9::$classMap;

        }, null, ClassLoader::class);
    }
}
