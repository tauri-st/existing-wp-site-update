<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0e064cdd82a4be104872380c8a68791
{
    public static $files = array (
        '2c2d2fe92db4cd03403dbb108ac263b7' => __DIR__ . '/..' . '/codeinwp/gutenberg-menu-icons/load.php',
        '0498965e576e4ec1efaedeccfee8b5f0' => __DIR__ . '/..' . '/codeinwp/menu-item-custom-fields/menu-item-custom-fields.php',
        '347e48cf03d89942a6ddafc17d247b11' => __DIR__ . '/..' . '/codeinwp/icon-picker/icon-picker.php',
        '5a095c604245b0e67e4573f0a3b240cd' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite0e064cdd82a4be104872380c8a68791::$classMap;

        }, null, ClassLoader::class);
    }
}