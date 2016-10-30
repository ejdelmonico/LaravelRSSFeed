<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0510555eec3304761203b257a51bfd0f
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'ejdelmonico\\LaravelRSSFeed\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ejdelmonico\\LaravelRSSFeed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static $classMap = array (
        'ejdelmonico\\LaravelRSSFeed\\LaravelRSSFeedServiceProvider' => __DIR__ . '/../..' . '/src/LaravelRSSFeedServiceProvider.php',
        'ejdelmonico\\LaravelRSSFeed\\SkeletonClass' => __DIR__ . '/../..' . '/src/SkeletonClass.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0510555eec3304761203b257a51bfd0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0510555eec3304761203b257a51bfd0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0510555eec3304761203b257a51bfd0f::$classMap;

        }, null, ClassLoader::class);
    }
}
