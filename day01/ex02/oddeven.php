#!/usr/bin/php
<?php
echo "Enter a number: ";
while ($num = fgets(STDIN))
{
    $num = trim($num);
    if (is_numeric($num))
    {
        if ($num%2 == 0)
            print("The number $num is even\n");
        else
            print("The number $num is odd\n");
    }
    else
        echo "'$num' is not a number\n";
    echo "Enter a number: ";
}
?>