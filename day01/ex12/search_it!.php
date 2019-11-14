#!/usr/bin/php
<?php
    $array = [];

    $search = $argv[1];
    $j = 2;
    while ($j < $argc)
    {
        $a = explode(":", $argv[$j]);
        $array[$a[0]] = $a[1];
        $j++;
    }
    if ($array[$search])
        print($array[$search]."\n");
?>