<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdc3ffeb1f7df8adcb8d7cbcdeaad385
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdc3ffeb1f7df8adcb8d7cbcdeaad385::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdc3ffeb1f7df8adcb8d7cbcdeaad385::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdc3ffeb1f7df8adcb8d7cbcdeaad385::$classMap;

        }, null, ClassLoader::class);
    }
}
