<?php

    foreach ($_GET as $action => $string )
    {
        $tab[$action] = $string;
    }
    if ($tab['action'] == "set")
        setcookie($tab['name'], $tab['value'], time()+60*60);
    else if ($tab['action'] == "get")
        echo $_COOKIE[$tab['name']];
    else if ($tab['action'] == "del")
        setcookie($tab['name'], $tab['value'],time() -1);
?>