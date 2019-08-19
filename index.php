<?php
require_once(__DIR__ . "/system/config.php");
switch (true) {
    case(isset($_GET["lang"]) != ""):
        if (languageExists(strip_tags($_GET["lang"])) === true) {
            $_SESSION["currentLanguage"] = strip_tags($_GET["lang"]);
            redirect($config["url"]);
        } else {
            redirect($config["url"]);
        }
        break;
    case(isset($_GET["tos"]) == "1"):
        $_SESSION["tos"] = true;
        include(__DIR__ . "/template/header.php");
        include(__DIR__ . "/template/tos.html");
        include(__DIR__ . "/template/footer.php");
        break;
    case (isset($_SESSION["deathYear"]) != ""):
        include(__DIR__ . "/template/header.php");
        include(__DIR__ . "/template/result.php");
        include(__DIR__ . "/template/footer.php");
        break;
    default:
        include(__DIR__ . "/template/header.php");
        include(__DIR__ . "/template/main.php");
        include(__DIR__ . "/template/footer.php");
        break;
}