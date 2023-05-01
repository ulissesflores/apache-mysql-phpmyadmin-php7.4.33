<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8d6f97f835df455bdf6fa5f0b9b12faf
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

        spl_autoload_register(array('ComposerAutoloaderInit8d6f97f835df455bdf6fa5f0b9b12faf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8d6f97f835df455bdf6fa5f0b9b12faf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8d6f97f835df455bdf6fa5f0b9b12faf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
