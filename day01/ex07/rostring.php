#!/usr/bin/php
<?PHP
    $arr = preg_split("/\s+/", $argv[1]);
    $i = 1;
    while ($arr[$i])
    {
        print($arr[$i]." ");
        $i++;
    }
    print(trim($arr[0])."\n");
?>