<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit736fe05a7050d6ba9e5cccb0e998f435
{
    public static $files = array (
        '5e66d66414e35233f034e5341fb6d0ca' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Heavypablo\\FirstPackage\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Heavypablo\\FirstPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit736fe05a7050d6ba9e5cccb0e998f435::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit736fe05a7050d6ba9e5cccb0e998f435::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit736fe05a7050d6ba9e5cccb0e998f435::$classMap;

        }, null, ClassLoader::class);
    }
}
