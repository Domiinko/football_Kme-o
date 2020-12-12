<?php
include_once("classes/DB.php");

use classes\DB;


$db = new DB("localhost", "root", "", "futbal");

$sponzory = $db->getSponzory();


?>

<!DOCTYPE html>

<html lang="en">

<style>


    div.turnajcek{
        padding-bottom: 5%;
        /*margin-left: auto; margin-right: auto;
        display: block;*/
       right: 80%;
    }

    @viewport {
        zoom: 1.0;
        width: extend-to-zoom;
    }

    @-ms-viewport {
        width: extend-to-zoom;
        zoom: 1.0;
    }
</style>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <?php include_once("header.php"); ?>


    <style>





        .lava{
            float:left;
            position:relative;
            left:400px;
            top:0px;
        }

        .styled-table{
            float:right;
            position:relative;
            right: 240px;
            top:-165px;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            margin-left: 88px;
        }
        .styled-table thead tr{
            background-color: #5e5e5e;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td{
            padding: 12px 15px;
        }
        .styled-table tbody tr{
            border-bottom: 1px solid #dddddd;
        }
        .styled-table tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }
        .styled-table tbody tr:last-of-type{
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row{
            font-weight: bold;
            color: white;
            background-color: #292735;

        }




        /*.container .content{
            position absolute;
            background: rgba(0,0,0,0.5);
            color:#f1f1f1f1;
            width: 100%;
            padding:20px;
            text-align: center;
            top:264px;
            font-size: xx-large;

        }*/
        /*  .container{
              position: relative;
              max-width: 800px;
              margin:0 auto;
          }*/

    </style>




</head>
<body>

<!-- navigation -->

<?php include_once("menu.php"); ?>

<div class="slider">
    <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
            <img src="images/football/H1.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/football/H2.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/football/H3.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/football/H4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
    </div>
    <!--manual navigation start-->
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
    <!--manual navigation end-->
</div>
<!--image slider end-->

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
            counter = 1;
        }
    }, 5000);
</script>



<table class="styled-table">
    <thread>
        <tr>
            <th>Pozícia</th>
            <th>Tým</th>
            <th>Zápasy</th>
            <th>Výhry</th>
            <th>Prehry</th>
            <th>Net RR</th>
            <th>Body</th>
        </tr>
    </thread>
    <tbody>
    <tr class="active-row">
        <td>1</td>
        <td> <img src="images/logo.png" width="35" height="15"></td>
        <td>10</td>
        <td>7</td>
        <td>3</td>
        <td>+5</td>
        <td>8</td>

    </tr>
    <tr class="active-row">
        <td>1</td>
        <td> <img src="images/logo_teams/Palmeiras.png" width="35" height="15"></td>
        <td>10</td>
        <td>7</td>
        <td>3</td>
        <td>+5</td>
        <td>7</td>

    </tr>
    <tr class="active-row">
        <td>1</td>
        <td> <img src="images/logo_teams/internacional.png" width="35" height="15"></td>
        <td>10</td>
        <td>6</td>
        <td>2</td>
        <td>+4</td>
        <td>5</td>

    </tr>
    <tr class="active-row">
        <td>1</td>
        <td> <img src="images/logo_teams/Flamengo.png" width="35" height="15"></td>
        <td>8</td>
        <td>5</td>
        <td>3</td>
        <td>+3</td>
        <td>4</td>

    </tr>
    <tr class="active-row">
        <td></td>
        <td></td>
        <td></td>
        <td><a href="sezona.php" class="btn btn-default">Viac výsledkov</a></td>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    </tbody>

</table>

<div class ="lava">
                <table class="styled-table">
                    <thread>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Zapas</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thread>
                    <tbody>
                    <tr class="active-row">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>San Siro</td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr class="active-row">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>21.10.2020 20:45</td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr class="active-row">
                        <td></td>
                        <td> <img src="images/logo.png" width="55" height="35"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><img src="images/logo_teams/gremio.png" width="55" height="35"></td>
                        <td></td>

                    </tr>
                    <tr class="active-row">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr class="active-row">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="sezona.php" class="btn btn-default">Viac výsledkov</a></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    </tbody>

                </table>
            </div>
        </div>


<div id="timy">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">

            </div>
            <div style="text-align: left">
            <div style=" position: relative; margin-left: auto;
    margin-right: auto; padding-top: 5%; float: left; padding-bottom:5% ;
    width: 35em" >
                <h2 style="padding-top: 60%; padding-bottom: 5% " >Posledné Novinky</h2>
                <p>Brazílsky futbalový klub Atletico Mineiro po tréningu posilnil hygienické pravidlá.</p>
                <p>Brazílsky klub kritizuje svojich fanúšikov za proti-gay skandovanie.</p>
                <p>Ronaldinho odohral svoj posledný profesionálny zápas v roku 2015 za brazílsky klub Fluminense.</p>
                <a href="timy.php" class="btn btn-default">Čítať viac</a>
            </div>
        </div>
        </div>



    </div>
</div>

<div id="timy">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div style=" position: relative; margin-left: auto;
             margin-right: auto; padding-top: 5%; float: left; padding-bottom:5% ;">
                <h2>Vianočný turnaj</h2>
                <p>Prihlás sa so svojimi kamošmi na vianočný futbalový turnaj. Využi tak možnosť predviesť svoje schopnosti a zviditeľniť sa. Vytvor so svojou partiou tím a dokážte že ste najlepší</p>
            </div>
        </div>
        </div>

        <div class="col-md-6 col-sm-12">

            <div>
                <a href=klub.php ><img src="images/turnaj.jpg" width=35% alt="turnaj img" style=" padding-bottom: 3%; "></a>

            </div>

            <div class="turnajcek" >
                <a rel="nofollow" href=klub.php class="btn btn-default">Viac o Turnaji</a>
            </div>
        </div>
    </div>


</div>


<!-- footer section -->
<footer style="padding-top:6%; ">

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
