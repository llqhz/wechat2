<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe6a3835326e8328ad4ee91e9a538714
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'llqhz\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'llqhz\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe6a3835326e8328ad4ee91e9a538714::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe6a3835326e8328ad4ee91e9a538714::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
