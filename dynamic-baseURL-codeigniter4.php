/*Tambahan BASE URL dinamis*/

$base = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']) : 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']); 

defined('BASE') 				|| define('BASE', $base); //dynamically baseURL
