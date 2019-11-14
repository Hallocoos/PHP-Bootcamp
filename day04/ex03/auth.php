<?php
    function auth($login, $passwd) {
        $temp = file_get_contents("../private/passwd");
        $users = unserialize($temp);
        foreach ($users as $current => $check) {
            if ($check['login'] == $login && $check['passwd'] == hash("whirlpool", $passwd)) {
                return (1);
            }
        }
        return (0);
    }
?>