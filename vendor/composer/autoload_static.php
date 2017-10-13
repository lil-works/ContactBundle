<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca8f1aeba53859d70e694cc0c7b806c9
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LilWorks\\ContactBundle\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LilWorks\\ContactBundle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca8f1aeba53859d70e694cc0c7b806c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca8f1aeba53859d70e694cc0c7b806c9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
