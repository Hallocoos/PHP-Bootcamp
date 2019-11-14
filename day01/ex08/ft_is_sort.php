#!/usr/bin/php
<?PHP
    function ft_is_sort($arr)
    {
        $sortedarr = $arr;
        sort($sortedarr);
        $res = TRUE;
        for ($i = 0; $i < count($arr); $i++)
        { 
            if ($arr[$i] != $sortedarr[$i])
                $res = FALSE;
        }
        return ($res);
    }
?>