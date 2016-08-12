<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitDontChange
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrivateBin\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrivateBin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Identicon' => 
            array (
                0 => __DIR__ . '/..' . '/yzalis/identicon/src',
            ),
        ),
    );

    public static $classMap = array (
        'Identicon\\Generator\\BaseGenerator' => __DIR__ . '/..' . '/yzalis/identicon/src/Identicon/Generator/BaseGenerator.php',
        'Identicon\\Generator\\GdGenerator' => __DIR__ . '/..' . '/yzalis/identicon/src/Identicon/Generator/GdGenerator.php',
        'Identicon\\Generator\\GeneratorInterface' => __DIR__ . '/..' . '/yzalis/identicon/src/Identicon/Generator/GeneratorInterface.php',
        'Identicon\\Generator\\ImageMagickGenerator' => __DIR__ . '/..' . '/yzalis/identicon/src/Identicon/Generator/ImageMagickGenerator.php',
        'Identicon\\Identicon' => __DIR__ . '/..' . '/yzalis/identicon/src/Identicon/Identicon.php',
        'PrivateBin\\Configuration' => __DIR__ . '/../..' . '/lib/Configuration.php',
        'PrivateBin\\Data\\AbstractData' => __DIR__ . '/../..' . '/lib/Data/AbstractData.php',
        'PrivateBin\\Data\\Database' => __DIR__ . '/../..' . '/lib/Data/Database.php',
        'PrivateBin\\Data\\Filesystem' => __DIR__ . '/../..' . '/lib/Data/Filesystem.php',
        'PrivateBin\\Filter' => __DIR__ . '/../..' . '/lib/Filter.php',
        'PrivateBin\\I18n' => __DIR__ . '/../..' . '/lib/I18n.php',
        'PrivateBin\\Model' => __DIR__ . '/../..' . '/lib/Model.php',
        'PrivateBin\\Model\\AbstractModel' => __DIR__ . '/../..' . '/lib/Model/AbstractModel.php',
        'PrivateBin\\Model\\Comment' => __DIR__ . '/../..' . '/lib/Model/Comment.php',
        'PrivateBin\\Model\\Paste' => __DIR__ . '/../..' . '/lib/Model/Paste.php',
        'PrivateBin\\Persistence\\AbstractPersistence' => __DIR__ . '/../..' . '/lib/Persistence/AbstractPersistence.php',
        'PrivateBin\\Persistence\\PurgeLimiter' => __DIR__ . '/../..' . '/lib/Persistence/PurgeLimiter.php',
        'PrivateBin\\Persistence\\ServerSalt' => __DIR__ . '/../..' . '/lib/Persistence/ServerSalt.php',
        'PrivateBin\\Persistence\\TrafficLimiter' => __DIR__ . '/../..' . '/lib/Persistence/TrafficLimiter.php',
        'PrivateBin\\PrivateBin' => __DIR__ . '/../..' . '/lib/PrivateBin.php',
        'PrivateBin\\Request' => __DIR__ . '/../..' . '/lib/Request.php',
        'PrivateBin\\Sjcl' => __DIR__ . '/../..' . '/lib/Sjcl.php',
        'PrivateBin\\View' => __DIR__ . '/../..' . '/lib/View.php',
        'PrivateBin\\Vizhash16x16' => __DIR__ . '/../..' . '/lib/Vizhash16x16.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitDontChange::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitDontChange::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitDontChange::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitDontChange::$classMap;

        }, null, ClassLoader::class);
    }
}
