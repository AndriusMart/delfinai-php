<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d36b37c52a424a4d37bb10202b9fd93
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
            $loader->fallbackDirsPsr4 = ComposerStaticInit9d36b37c52a424a4d37bb10202b9fd93::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit9d36b37c52a424a4d37bb10202b9fd93::$classMap;

        }, null, ClassLoader::class);
    }
}