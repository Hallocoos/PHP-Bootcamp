#!/usr/bin/php
<?PHP
    $str = trim($argv[1]);
    $temp = preg_replace("/\s+/", " ", $str);
    print("$temp \n");
?>