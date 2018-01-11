<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50ad0e6ecb02a38c98d4aaf05a89de9d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50ad0e6ecb02a38c98d4aaf05a89de9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50ad0e6ecb02a38c98d4aaf05a89de9d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
