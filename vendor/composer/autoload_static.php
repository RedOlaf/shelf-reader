<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02d040707f99e98eec1948cb9c12670b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adldap\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/adldap/adldap/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02d040707f99e98eec1948cb9c12670b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02d040707f99e98eec1948cb9c12670b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02d040707f99e98eec1948cb9c12670b::$classMap;

        }, null, ClassLoader::class);
    }
}
