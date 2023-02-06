<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c0da88713aa08a6baf465f9b2540491
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c0da88713aa08a6baf465f9b2540491::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c0da88713aa08a6baf465f9b2540491::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c0da88713aa08a6baf465f9b2540491::$classMap;

        }, null, ClassLoader::class);
    }
}