<?php
define('URL', 'https://www.lafeniceinteriors.co.uk'); // az oldal URL-je
define('PATH', realpath('.'));

$url = $_REQUEST['url'];
$url_array = array();
$url_array = explode('/', $url);
$url_length = sizeof($url_array);
$current_page = $url_array[$url_length - 1];
$index_page = 0;
$error_page = 0;

if ($url_length > 0) {
    if (file_exists(PATH.'/page-'.$current_page.'.php')) {
        include_once('page-'.$current_page.'.php');
    } else if (!empty($_REQUEST['url'])) {
        $error_page = 1;
        include_once('page-404.php');
    } else {
        $index_page = 1;
        include_once('page-index.php');
    }
} else {
    $index_page = 1;
    include_once('page-index.php');
}

?>
