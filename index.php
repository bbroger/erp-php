<?php 
    require "app/config/config.php";
    require "app/core/Core.php";
    require "vendor/autoload.php";
    include "app/layouts/header.php";

    $core = new Core;
    $core->run();

    ?>
    <?php include "app/layouts/footer.php"; ?>