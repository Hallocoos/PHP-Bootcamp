#!/usr/bin/php
<?PHP
    function ft_split($str)
    {
        $ret = preg_split("/[\s,]+/", $str);
        sort($ret);
        return ($ret);
    }
?>