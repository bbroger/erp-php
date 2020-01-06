<?php 
    require "app/core/Core.php";
    require "vendor/autoload.php";
    include "app/layouts/header.php";

    $core = new Core;
    $core->run();

    ?>
    <h1>Bem vindo!</h1>
    <?php include "app/layouts/footer.php"; ?>