<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd678a76459108cdab1ad063b592a79b
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
            'aliCore\\' => 8,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'aliCore\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliCore',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd678a76459108cdab1ad063b592a79b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd678a76459108cdab1ad063b592a79b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd678a76459108cdab1ad063b592a79b::$classMap;

        }, null, ClassLoader::class);
    }
}
