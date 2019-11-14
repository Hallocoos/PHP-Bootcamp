#!/usr/bin/php
<?PHP
    function ex09sort($a, $b)
    {
        $i = 0;
        $a = strtolower($a);
        $b = strtolower($b);
        while ($a[$i] && $b[$i])
        {
            $ora = ctype_alpha($a[$i]) ? 0 : (ctype_digit($a[$i]) ? 1 : 2);
            $orb = ctype_alpha($b[$i]) ? 0 : (ctype_digit($b[$i]) ? 1 : 2);
            if ($ora - $orb)
                return ($ora - $orb);
            else if ($a[$i] !== $b[$i])
                return ($a[$i] < $b[$i] ? -1 : 1);
            $i++;
        }
        return ( $a[$i] == NULL ? -1 : 1);
    }

    $i = 1;
    while ($argv[$i])
    {
        $str .= " $argv[$i]";
        $str = trim($str);
        $i++;
    }
    $final = preg_split("/[\s]+/", $str);
    usort($final, ex09sort);
    $i = 0;
    while ($final[$i])
    {
        print("$final[$i]\n");
        $i++;
    }
?>