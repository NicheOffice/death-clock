<?php
require_once(__DIR__ . "/../system/config.php");
if ($_SERVER["REQUEST_URI"] != parse_url($config["url"], PHP_URL_PATH) . "/" && isset($_SESSION["tos"]) != true) {
    redirect($config["url"]);
    die();
}
?>
<footer class="footer">
    <div class="container text-center">
        <br><span class="text-muted">©2017 <?php echo $config["title"]; ?>. <?php echo $lang["disclaimer"]; ?></span>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="<?php echo $config["url"]; ?>/assets/main.js"></script>
<?php
if (isset($_SESSION["deathYear"]) != "") {
    echo "<script>";
    echo "startCountdown('" . $_SESSION["deathYear"] . "','" . $lang["years"] . "','" . $lang["days"] . "');";
    echo "</script>";
}
?>
<link rel="stylesheet" type="text/css"
      href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
<?php if ($theme["showcookieInformation"] === true) { ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                palette: {
                    popup: {background: "#000"},
                    button: {background: "transparent", text: "#f1d600", border: "#f1d600"}
                }, content: {href: "<?php echo $config["url"]; ?>/?tos=1"}
            })
        });</script>
<?php } ?>
</body>
</html>