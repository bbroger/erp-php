<?php 
    require "app/core/Core.php";
    require "vendor/autoload.php";
    include "app/layouts/header.php";

    $core = new Core;
    $core->run();

    ?>
    <div class="contaier">
        <div class="row mt-3">
            <div class="col-xs-12">
                <table class="table table-striped">
                    <tbody class="theader-light">
                        <tr>
                            <td>Controller:</td>
                            <td><?=$core->getController()?></td>
                        </tr>
                        <tr>
                            <td>Action:</td>
                            <td><?=$core->getAction() ?></td>
                        </tr>                
                        <tr>
                            <td>Params:</td>
                            <td>
                                <?php 
                                $list = $core->getParams();
                                foreach ($list as $l) {
                                    echo $l . " ";
                                }
                                ?>
                            </td>
                        </tr>                                
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include "app/layouts/footer.php"; ?>