<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34dd2f70816a9614916cb6d6576bbc8e
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34dd2f70816a9614916cb6d6576bbc8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34dd2f70816a9614916cb6d6576bbc8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34dd2f70816a9614916cb6d6576bbc8e::$classMap;

        }, null, ClassLoader::class);
    }
}
