<?php
$options = getopt('', array('file:', 'search:', 'replace:'));
$path = $options['path'];
$search = $options['search'];
$replace = $options['replace'];

if (!file_exists($path)) {
    echo "Report path does not exist: $path\n";
    exit(1);
}

file_put_contents($path, strtr(file_get_contents($path), [$search => $replace]));