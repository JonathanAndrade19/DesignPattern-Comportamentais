<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit252cf1202906abe838c04a13bddbf59c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit252cf1202906abe838c04a13bddbf59c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit252cf1202906abe838c04a13bddbf59c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit252cf1202906abe838c04a13bddbf59c::$classMap;

        }, null, ClassLoader::class);
    }
}
