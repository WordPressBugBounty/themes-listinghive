<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit603ea8ec391e307d4ad7ec5fcc364f0e
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit603ea8ec391e307d4ad7ec5fcc364f0e::$classMap;

        }, null, ClassLoader::class);
    }
}