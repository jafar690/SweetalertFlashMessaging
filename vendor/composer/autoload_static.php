<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff095a1a88225765269d6779d576c3b3
{
    public static $files = array (
        '66ad965a9e25217bdf80bcc1f2af0979' => __DIR__ . '/../..' . '/src/Laracasts/Flash/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jafar690\\SweetalertFlashMessaging\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jafar690\\SweetalertFlashMessaging\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff095a1a88225765269d6779d576c3b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff095a1a88225765269d6779d576c3b3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}