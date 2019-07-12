<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd845107acc87ee3738be4588b2df57c8
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EddBtcAltGateWayCoreLib\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EddBtcAltGateWayCoreLib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd845107acc87ee3738be4588b2df57c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd845107acc87ee3738be4588b2df57c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
