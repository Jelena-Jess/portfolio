<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9cb3115ea312a459079544fd8601af92
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9cb3115ea312a459079544fd8601af92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9cb3115ea312a459079544fd8601af92::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
