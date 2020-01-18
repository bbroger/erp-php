<?php 
    require "app/config/config.php";
    require "app/core/Core.php";
    require "vendor/autoload.php";
    include "app/layouts/header.php";    
    ?>
        <div class="row">
            <div class="col-sx-12 col-sm-12 col-md-3 col-lg-3">
                <?php include "app/layouts/menu.php"; ?>  
            </div>

            <div class="col-sx-12 col-sm-12 col-md-9 col-lg-9">
                <?php
                $core = new Core;
                $core->run();
                ?>                            
            </div>                
        </div>
    <?php include "app/layouts/footer.php"; ?>
