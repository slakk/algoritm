<?php
function itsPHP($filename) {
    return end(getPart($filename)) == 'php';
  }
function getPart($filename) {
    return explode(".", $filename);
  }
function getName($filename) {
    var_dump(preg_replace('/^\_/', '', getPart($filename)[0]));
  }
$dir = "./";
$files = scandir($dir);

foreach ($files as $key => $name) {
	if(itsPHP($name)) {
		getName($name);
	}
}