<?php

//$BaseUrl = $_SERVER['HTTP_HOST'] == "localhost" ? "/automation" : "http://192.168.30.11";
//$BaseUrl = $_SERVER['HTTP_HOST'] == "localhost" ? "/automation" : "https://" . $_SERVER['HTTP_HOST'];
if ($_SERVER['HTTP_HOST'] == "localhost") {
    $BaseUrl = "/mehrbarpost";
} else {
    $BaseUrl = "https://" . $_SERVER['HTTP_HOST'];
}


$pass = $_SERVER['HTTP_HOST'] == "localhost" ? "" : "mZ8biriKUdWHzP";
define("SERVER_NAME", "localhost");
define("DATABASE_NAME", "gadver_main");
define("USER_NAME", "gadver");
define("PASSWORD", "mZ8biriKUdWHzP");


