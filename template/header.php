<?php
require_once(__DIR__ . "/../system/config.php");
if ($_SERVER["REQUEST_URI"] != parse_url($config["url"], PHP_URL_PATH) . "/" && $_SESSION["tos"] != true) {
    redirect($config["url"]);
    die();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php echo $config["description"]; ?>">
    <meta name="author" content="<?php echo $config["author"]; ?>"/>
    <meta name="generator" content="https://goo.gl/kH44gF"/>
    <title><?php echo $config["title"]; ?></title>
    <meta itemprop="name" content="<?php echo $config["title"]; ?>">
    <meta itemprop="description" content="<?php echo $config["description"]; ?>">
    <meta itemprop="image" content="<?php echo $config["url"]; ?>/assets/social-media-banner.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $config["title"]; ?>">
    <meta name="twitter:description" content="<?php echo $config["description"]; ?>">
    <meta name="twitter:image:src" content="<?php echo $config["url"]; ?>/assets/social-media-banner.png">
    <meta property="og:title" content="<?php echo $config["title"]; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $config["url"]; ?>/assets/social-media-banner.png">
    <meta property="og:description" content="<?php echo $config["description"]; ?>">
    <meta property="og:site_name" content="<?php echo $config["title"]; ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $config["url"]; ?>/assets/favicon.png"/>
    <style>
        .language{text-transform:uppercase}#questions fieldset:not(:first-of-type){display:none}section{margin-top:5%}.btn-social{color:#FFF;margin-top:-3%}.btn-social:hover{color:#FFF}.btn-facebook{background-color:#3b5999}.btn-twitter{background-color:#55acee}.btn-google{background-color:#dd4b39}.btn-pinterest{background-color:#bd081c}.btn-email{background-color:#131418}#countdown{font-family:monospace;font-size:3em}.year{color:#daa520}.blink{-webkit-animation:blink .75s linear infinite;-moz-animation:blink .75s linear infinite;-ms-animation:blink .75s linear infinite;-o-animation:blink .75s linear infinite;animation:blink .75s linear infinite}@-webkit-keyframes blink{0%,50%{opacity:1}100%,50.01%{opacity:0}}@-moz-keyframes blink{0%,50%{opacity:1}100%,50.01%{opacity:0}}@-ms-keyframes blink{0%,50%{opacity:1}100%,50.01%{opacity:0}}@-o-keyframes blink{0%,50%{opacity:1}100%,50.01%{opacity:0}}@keyframes blink{0%,50%{opacity:1}100%,50.01%{opacity:0}}
    </style>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $config["url"]; ?>">
            <?php echo $config["title"]; ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link"
                                        href="<?php echo $config["url"]; ?>"><?php echo $lang["home"] ?></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $lang["language"]; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php listLanguages(); ?>
                    </div>
                </li>
                <?php
                if (isset($config["menu"]) != "") {
                    echo buildMenu($config["menu"]);
                }
                socialLinks($social);
                ?>
            </ul>
        </div>
    </div>
</nav>