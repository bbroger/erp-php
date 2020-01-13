<?php 
    require "app/config/config.php";
    require "app/core/Core.php";
    require "vendor/autoload.php";
    include "app/layouts/header.php";
    
    ?>
    <div class="container-fluid">
    <div class="row">
    <?php include "app/layouts/menu.php"; ?>
    <?php
    $core = new Core;
    $core->run();
    ?>
    </div>
    </div>
    <?php include "app/layouts/footer.php"; ?>