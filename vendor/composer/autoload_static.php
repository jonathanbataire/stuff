<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit338202d737aa92e64ffcf2bf00749965
{
    public static $files = array (
        '45aa9999d4f6d0867d163901abfff6b6' => __DIR__ . '/..' . '/mcaskill/php-array-group-by/Function.Array-Group-By.php',
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit338202d737aa92e64ffcf2bf00749965::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
