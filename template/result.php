<?php
require_once(__DIR__ . "/../system/config.php");
if ($_SERVER["REQUEST_URI"] != parse_url($config["url"], PHP_URL_PATH) . "/") {
    redirect($config["url"]);
    die();
}
?>
<section class="section">
    <div class="container text-center">
        <p class="lead" style="color:#FFFFFF"><?php echo $lang["homepage-slogan"]; ?></p>
    </div>
    <?php
    if ($theme["ads"] === true) {
        include("adcode.html");
    }
    if ($_SESSION["deathYear"] <= date("Y")) {
        $dead = true;
        $message = "";
    } else {
        $message = str_replace("%YEAR%", $_SESSION["deathYear"], $lang["message"]);
    }
    ?>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-md-6 mx-auto">
                <div class="card rounded">
                    <div class="card-body">
                        <span class="lead">
                            <?php echo $lang["result-title"]; ?>
                        <div id="countdown"></div>
                        <span><?php echo $lang["die-time"]; ?><br></span>
                        <span class="blink year display-1"><?php echo $_SESSION["deathYear"]; ?></span>
                        </span>
                        <a class="btn btn-block btn-primary"
                           href="<?php echo $config["url"]; ?>"><?php echo $lang["go-home"]; ?></a>
                        <div style="margin-top:2%">
                            <p class="lead"><?php echo $lang["share"]; ?></p>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $config["url"]; ?>"
                               class="btn btn-social btn-facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/home?status=<?php echo urlencode($message); ?>%20<?php echo $config["url"]; ?>"
                               class="btn btn-social btn-twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://plus.google.com/share?url=<?php echo $config["url"]; ?>"
                               class="btn btn-social btn-google" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="mailto:?&subject=<?php echo $config["title"]; ?>&body=<?php echo urlencode($message); ?>%0A<?php echo $config["url"]; ?>"
                               class="btn btn-social btn-email" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://pinterest.com/pin/create/button/?url=<?php echo $config["url"]; ?>&media=<?php echo $config["url"]; ?>/assets/social-media-banner.png&description=<?php echo urlencode($message); ?>"
                               class="btn btn-social btn-pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                            <p><?php echo $lang["promote"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php session_destroy(); ?>