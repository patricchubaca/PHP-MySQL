<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8457b048616c1886d979f1fcc1c0b4d
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8457b048616c1886d979f1fcc1c0b4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8457b048616c1886d979f1fcc1c0b4d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
