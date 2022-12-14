<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83ecd5587924d634a4ab669b54f4b3ff
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit83ecd5587924d634a4ab669b54f4b3ff::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit83ecd5587924d634a4ab669b54f4b3ff::$classMap;

        }, null, ClassLoader::class);
    }
}
