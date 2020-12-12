<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "futbal", 3306);
$menuItems = $db->getMenuItems();
?>


<div class="container">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <?php
                foreach($menuItems as $menuItem){
                ?>

                   <li><a href="<?php echo $menuItem['file_path']; ?>" class="active"><?php echo $menuItem['nazov']; ?></a></li>

                    <?php
                }
                ?>

            </ul>
        </div>

    </div>
</div>
