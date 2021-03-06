<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit675e1cdcd214dda0aa41ef8a038cf44a
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Escaper\\' => 13,
        ),
        'P' => 
        array (
            'PhpOffice\\PhpWord\\' => 18,
            'PhpOffice\\Common\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'PhpOffice\\PhpWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpword/src/PhpWord',
        ),
        'PhpOffice\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/common/src/Common',
        ),
    );

    public static $classMap = array (
        'PclZip' => __DIR__ . '/..' . '/pclzip/pclzip/pclzip.lib.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit675e1cdcd214dda0aa41ef8a038cf44a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit675e1cdcd214dda0aa41ef8a038cf44a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit675e1cdcd214dda0aa41ef8a038cf44a::$classMap;

        }, null, ClassLoader::class);
    }
}
