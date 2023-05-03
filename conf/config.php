<?php 

    define("ROOT", $_SERVER['DOCUMENT_ROOT'] . "/ConferenceRegistration/");
    define("CONTROLLER_PATH", ROOT . "/controllers/");  
    define("VIEW_PATH", ROOT. "/views/");
    define("CORE_PATH", ROOT . "/core/");

    require_once("route.php");
    require_once(CORE_PATH . "controller.php");
    require_once(CORE_PATH . "view.php");

    Routing::buildRoute();

?>