<?php
function permission($url, $role)
{
    switch ($role) {
        case "admin":
            return true;
            break;
        case "user1":
            return "dada";
            break;
        case "user2":
            return "sadasda";
            break;
        case "user3":
            return "das54";
            break;
    }

}