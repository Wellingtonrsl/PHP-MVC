<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5549f2225e4743d71819359b3a4ee0ae
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'F' => 
        array (
            'FrameworkAULA\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'FrameworkAULA\\' => 
        array (
            0 => __DIR__ . '/..' . '/frameworkAULA',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5549f2225e4743d71819359b3a4ee0ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5549f2225e4743d71819359b3a4ee0ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5549f2225e4743d71819359b3a4ee0ae::$classMap;

        }, null, ClassLoader::class);
    }
}
