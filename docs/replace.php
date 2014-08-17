<?php


require_once __DIR__ . '/../vendor/autoload.php';

/*
$file = $_SERVER['argv'][1];

$content = file_get_contents($file);
$text = preg_replace("/\s*\?>\s*$|\s+$/i", "\n", $content);
file_put_contents($file . "_1", $text);
echo $text;
/* */

$dir = __DIR__ . "/../src";
if (array_key_exists('1', $_SERVER['argv'])) {
    $dir = $_SERVER['argv'][1];
    if (!is_dir($dir)) {
        exit("No dir");
    }
}

$arr = \ezcBaseFile::findRecursive($dir, array('@.*.php$@') );
foreach ($arr as $file) {
    echo realpath($file) . "\n";

    $content = file_get_contents($file);
    $text = preg_replace("/\s*\?>\s*$|\s+$/i", "\n", $content);
    file_put_contents($file, $text);
    /* */
}
/* */
