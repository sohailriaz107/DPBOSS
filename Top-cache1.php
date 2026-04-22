<?php

date_default_timezone_set('Asia/Kolkata');

$url = $_SERVER["SCRIPT_NAME"];

$break = Explode('/', $url);
$cacheext = 'html';
$cachedir = 'cache/';

$file = $break[count($break) - 1];

$page='http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$cachefile=$cachedir.md5($page).'.'.$cacheext;

//$cachefile = 'cache/cached-'.substr_replace($file ,"",-4).'.html';

$cachetime = 300;

// Serve from the cache if it is younger than $cachetime

if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {

    echo "<!-- Cached copy, generated ".date('H:i:s', filemtime($cachefile))." -->\n";

    readfile($cachefile);

    exit;

}

ob_start(); // Start the output buffer

?>