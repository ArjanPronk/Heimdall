<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3cbbfb3ab7b82a4dc4ef4f2720c0d482
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

        spl_autoload_register(array('ComposerAutoloaderInit3cbbfb3ab7b82a4dc4ef4f2720c0d482', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3cbbfb3ab7b82a4dc4ef4f2720c0d482', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3cbbfb3ab7b82a4dc4ef4f2720c0d482::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit3cbbfb3ab7b82a4dc4ef4f2720c0d482::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire3cbbfb3ab7b82a4dc4ef4f2720c0d482($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire3cbbfb3ab7b82a4dc4ef4f2720c0d482($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
