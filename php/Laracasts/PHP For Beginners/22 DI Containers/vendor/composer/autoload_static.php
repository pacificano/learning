<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe5a1f9966e3e4365453adc519af58c8
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/app.php',
        'ComposerAutoloaderInitbe5a1f9966e3e4365453adc519af58c8' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitbe5a1f9966e3e4365453adc519af58c8' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/queryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
        'Task' => __DIR__ . '/../..' . '/task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbe5a1f9966e3e4365453adc519af58c8::$classMap;

        }, null, ClassLoader::class);
    }
}
