<?php 
ini_set("display_errors", "On"); 
error_reporting(E_ALL);

// config start
$projectName = 'Honey-css';
// config end

require 'vendor/markdown.php';
require 'markdown.php';
$titleAndHeads = Markdown::parseFiles();
if (!empty($_GET['file'])) {
	$content = Markdown::parseFile($_GET['file']);
}

require 'view.php';
