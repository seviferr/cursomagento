<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitecce3782aa3fe06e04eaecc9c78aa14f
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MagentoHackathon\\Composer\\Magento' => 
            array (
                0 => __DIR__ . '/..' . '/magento-hackathon/magento-composer-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitecce3782aa3fe06e04eaecc9c78aa14f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
