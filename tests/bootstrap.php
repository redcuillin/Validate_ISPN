<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';
$paths = require dirname(__DIR__) . '/vendor/composer/include_paths.php';
$paths[] = get_include_path();
set_include_path(implode(PATH_SEPARATOR, $paths));
