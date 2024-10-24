<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit124701562c86616a9ea3617f3f86efcc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPJasper\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPJasper\\' => 
        array (
            0 => __DIR__ . '/..' . '/geekcom/phpjasper/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JasperPHP' => 
            array (
                0 => __DIR__ . '/..' . '/cossou/jasperphp/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit124701562c86616a9ea3617f3f86efcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit124701562c86616a9ea3617f3f86efcc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit124701562c86616a9ea3617f3f86efcc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit124701562c86616a9ea3617f3f86efcc::$classMap;

        }, null, ClassLoader::class);
    }
}