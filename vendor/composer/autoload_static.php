<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite316d6ac3a44db7f95dd03a42bf15a7c
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite316d6ac3a44db7f95dd03a42bf15a7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite316d6ac3a44db7f95dd03a42bf15a7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite316d6ac3a44db7f95dd03a42bf15a7c::$classMap;

        }, null, ClassLoader::class);
    }
}
