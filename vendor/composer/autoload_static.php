<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb4857ebc0aa5bc11ad6c77d0b291ff3
{
    public static $files = array (
        'f703bd39fdba6eab823974d3e39a4f7c' => __DIR__ . '/../..' . '/src/class-export-content.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zenx5\\Bootstrap\\' => 16,
        ),
        'N' => 
        array (
            'Naucon\\Utility\\' => 15,
            'Naucon\\File\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zenx5\\Bootstrap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Naucon\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/naucon/utility/src',
        ),
        'Naucon\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/naucon/file/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb4857ebc0aa5bc11ad6c77d0b291ff3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb4857ebc0aa5bc11ad6c77d0b291ff3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb4857ebc0aa5bc11ad6c77d0b291ff3::$classMap;

        }, null, ClassLoader::class);
    }
}