#!/usr/bin/php
<?PHP
    if ($argc == 4)
    {
        $i = 1;
        $value = trim($argv[$i++]);
        while ($argv[$i])
        {
            $op = trim($argv[$i++]);
            $value2 = trim($argv[$i++]);
            if ($op == "+")
                $value = $value + $value2;
            else if ($op == "-")
                $value = $value - $value2;
            else if ($op == "*")
                $value = $value * $value2;
            else if ($op == "/")
                $value = $value / $value2;
            else if ($op == "%")
                $value = $value % $value2;
        }
        print($value);
    }
?>