<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e99d405230023660140f932c99e21dc
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
        'App\\QueueSymmetry' => __DIR__ . '/../..' . '/app/QueueSymmetry.php',
        'App\\StackSymmetry' => __DIR__ . '/../..' . '/app/StackSymmetry.php',
        'App\\StringSymmetry' => __DIR__ . '/../..' . '/app/StringSymmetry.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e99d405230023660140f932c99e21dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e99d405230023660140f932c99e21dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e99d405230023660140f932c99e21dc::$classMap;

        }, null, ClassLoader::class);
    }
}
