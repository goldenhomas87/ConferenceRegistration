<?php 

    define("ROOT", $_SERVER['DOCUMENT_ROOT'] . "/ConferenceRegistration/");
    define("CONTROLLER_PATH", ROOT . "/controllers/");
    define("MODEL_PATH", ROOT . "/models/");
    define("VIEW_PATH", ROOT. "/views/");
    define("CORE_PATH", ROOT . "/core/");

    require_once("route.php");
    require_once("db.php");
    require_once(CORE_PATH . "controller.php");
    require_once(CORE_PATH . "model.php");
    require_once(CORE_PATH . "view.php");

    Routing::buildRoute();

?>