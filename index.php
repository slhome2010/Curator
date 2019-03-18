<?php
// Global define
define('VERSION', 'v1.0.1');
define('DIR_DOWNLOAD', '/downloads');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Languages
@session_start();

header("Location: /".$CurentLang."/index.html");

?>