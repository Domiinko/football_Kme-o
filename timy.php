<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "futbal", 3306);
$hraci = $db->getHraci();
$sponzory = $db->getSponzory();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("header.php"); ?>

</head>
<body>

<!-- navigation -->
<?php include_once("menu.php"); ?>


<!-- about header section -->
<div id="about-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12"></div>
        </div>
    </div>
</div>

<!-- team section -->
<div id="team">
    <div class="container">

        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2>Naša Zestava</h2>
            </div>
        </div>



        <div class="row mt30">
        <?php
        foreach($hraci as $hrac){
            ?>

            <div class="col-md-4 col-sm-4 col-xs-9">
                <div class="team-wrapper">
                    <img src="<?php echo $hrac['img_path'];?>" width="500" height="500" class="img-responsive" alt="team img">
                    <h3><?php echo $hrac['cislo'];?></h3>
                    <h4><?php echo $hrac['meno'];?> <?php echo $hrac['priezvisko'];?></h4>
                </div>
            </div>

        <?php
        }
        ?>
        </div>


        <div class="row mt30">
            <div class="col-md-12 col-sm-12">
                <hr>
            </div>
            <div class="col-md-6 col-sm-6">

        </div>
    </div>
</div>

<!-- footer section -->
    <footer>

        <img src="images/logo.png" class="img-responsive1" alt="logo" >

        <p>SPONZORY</p>


        <table class="styled-table_foot">
            <tbody>

            <?php
            foreach($sponzory as $sponzor){
                ?>

                <tr class="active-row_foot">
                    <td><img src="<?php echo $sponzor['s1']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s2']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s3']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s4']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s5']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s6']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s7']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s8']; ?>"></td>
                    <td><img src="<?php echo $sponzor['s9']; ?>"></td>
                </tr>

                <?php
            }
            ?>

            </tbody>
        </table>



        <div class="input-group">
            <form action="#" method="post">
            </form>
        </div>


    </footer>

    <!-- copyright section -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>Všetky práva vyhradené © 2020 Dominik Kmeťo</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/atletico/" class="fa fa-facebook"></a></li>
                        <li><a href="https://twitter.com/atieticomg?lang=en" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.futfanatics.net/atletico-mineiro-dribble-t-shirt" class="fa fa-dribbble"></a></li>
                        <li><a href="https://br.pinterest.com/dil956/clube-atl%C3%A9tico-mineiro/" class="fa fa-pinterest"></a></li>
                        <li><a href="https://www.behance.net/search/projects/?search=atletico+mg"" class="fa fa-behance"></a></li>
                        <li><a href="https://en.wikipedia.org/wiki/History_of_Clube_Atl%C3%A9tico_Mineiro" class="fa fa-envelope-o"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- javascript js -->

    <?php include_once("footer.php"); ?>

</body>
</html>
