<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e5241e8f9e12964c895b5012bde4406
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e5241e8f9e12964c895b5012bde4406::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e5241e8f9e12964c895b5012bde4406::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e5241e8f9e12964c895b5012bde4406::$classMap;

        }, null, ClassLoader::class);
    }
}
