<section class="section">
    <div class="container text-center">
        <p class="lead" style="color:#FFFFFF"><?php echo $lang["homepage-slogan"]; ?></p>
    </div>
    <?php
    if ($theme["ads"] === true) {
        include("adcode.html");
    }
    ?>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-md-6 mx-auto">
                <div class="card rounded">
                    <div class="card-body">
                        <?php include("questions.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>