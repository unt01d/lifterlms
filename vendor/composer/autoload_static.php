<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6535669571924b3043b0e50627f1a656
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6535669571924b3043b0e50627f1a656::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6535669571924b3043b0e50627f1a656::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}