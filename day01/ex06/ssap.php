#!/usr/bin/php
<?PHP
    $i = 1;
    while ($argv[$i])
    {
        $str .= " $argv[$i]";
        $str = trim($str);
        $i++;
    }
    $final = preg_split("/[\s]+/", $str);
    sort($final);
    $i = 0;
    while ($final[$i])
    {
        print("$final[$i]\n");
        $i++;
    }
?>