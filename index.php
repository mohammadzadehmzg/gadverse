<?php
//$dtatata = serialize($_SERVER);
//print_r(unserialize($dtatata));
//if (isset($_SERVER['HTTP_ORIGIN'])) {
//    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
//    // you want to allow, and if so:
//    header('Access-Control-Allow-Origin: *');
////    header('Access-Control-Allow-Origin: https://soulbeautyclub.com/');
//    header('Access-Control-Allow-Credentials: true');
//    header('Access-Control-Max-Age:  ');
//}
//if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
//        // may also be using PUT, PATCH, HEAD etc
//        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
//    }
//
//    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
//        header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
//    }
//    exit(0);
//}

session_start();

if (isset($_SESSION["username"])) {
//    $timeout = $_SESSION["timeout"];
//    $role = $_SESSION["role"];
//    $seller = $_SESSION["seller"];
    $id = $_SESSION["id"];
}

//$inactive = 500;
//$session_life = 0;
//if (isset($timeout)) {
//    $session_life = time() - $_SESSION['timeout'];
//}


//if ($session_life > $inactive) {
//    session_destroy();
//    session_start();
//
//    $_SESSION['timeoutMessage'] = "زمان نشست شما به پایان رسیده است لطفا دوباره وارد شوید!";
//
//    header("Location: login");
//}


$uri = isset($_REQUEST['url']) ? $_REQUEST['url'] : '/';



$url = explode("/", $uri);


//$name = $_SESSION["name"];
//$family = $_SESSION["family"];
//$username = $_SESSION["username"];

//if (!isset($_SESSION["name"]) && !isset($_SESSION["family"]) && !isset($_SESSION["username"])) {
//    header('location: login');
//    exit();
//}
//print_r($url);
if ($uri == '/') {
//    if (/*!isset($_SESSION["name"]) && !isset($_SESSION["family"]) && */!isset($_SESSION["username"])) {
//
//        header('location: login');
//        exit;

//    } else {
    require_once "./controller/home/index.php";
//    header('location: home');

//        if (file_exists("./controller/" . $url[0] . "/" . isset($url[1]) . ".php")) {
//            require_once "./controller/" . $url[0] . "/" . $url[1] . ".php";
//        } else if (file_exists("./controller/" . $url[0]) && !file_exists(isset($url[1]) . ".php")) {
//            require_once "./controller/" . $url[0] . "/requests.php";
//        } else {
//            header('location: dashboard');
//        }
//    }

} else {
//    if (!isset($_SESSION["username"])) {
////        header('location: login');
//
//        require_once "./controller/login/index.php";
//
//    } else {

    if (isset($url[1]) && file_exists("./controller/" . $url[0] . "/" . $url[1] . ".php")) {
        require_once "./controller/" . $url[0] . "/" . $url[1] . ".php";
    } else if (file_exists("./controller/" . $url[0]) && !file_exists(isset($url[1]) . ".php")) {
        require_once "./controller/" . $url[0] . "/index.php";
    } else {
        require_once "./controller/home/index.php";
    }

//    }

}

