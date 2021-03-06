<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite14a9940b2e17be2f5dc7eab3107c390
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/..' . '/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite14a9940b2e17be2f5dc7eab3107c390::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite14a9940b2e17be2f5dc7eab3107c390::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
