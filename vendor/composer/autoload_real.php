<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0ae8b0af8b8faa10cde2ae5166e658e1
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit0ae8b0af8b8faa10cde2ae5166e658e1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0ae8b0af8b8faa10cde2ae5166e658e1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0ae8b0af8b8faa10cde2ae5166e658e1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}