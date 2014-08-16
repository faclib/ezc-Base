<?php
require 'tutorial_autoload.php';

$data = ezcBaseFile::findRecursive(
	dirname(__DIR__) ,
	array( '@repos/.*_autoload.php$@' ),
	array( '@/my_.*@' )
);
var_dump( $data );
