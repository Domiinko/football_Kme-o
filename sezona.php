<!DOCTYPE html>
<html lang="en">
<?php
include_once("classes/DB.php");

use classes\DB;


$db = new DB("localhost", "root", "", "futbal",3306);

$Score = $db->getScore();
$sponzory = $db->getSponzory();



?>


<head>
    <?php include_once("header.php"); ?>

    <style>
        .styled-table{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 80%;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            margin-left: 10%;
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
            background-color: #2d2c2c;
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


<!-- about header section -->
<div id="about-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12"></div>
        </div>
    </div>
</div>


<!-- team section -->

    <table class="styled-table">
        <thread>
            <tr>
                <th>Pozícia</th>
                <th>Znak</th>
                <th>Tým</th>
                <th>Odohrané zápasy</th>
                <th>Výhry</th>
                <th>Prehry</th>
                <th>Remizi</th>
                <th>Body</th>
            </tr>
        </thread>
        <tbody>

        <?php
        foreach($Score as $scores){
            ?>
        <tr class="active-row">
            <td><?php echo $scores['pozicia']; ?></td>
            <td><img src="<?php echo $scores['tym']; ?>" width="80" height="70"></td>
            <td><?php echo $scores['tym_text']; ?> </td>
            <td><?php echo $scores['zapasy']; ?> </td>
            <td><?php echo $scores['vyhry']; ?> </td>
            <td><?php echo $scores['prehry']; ?> </td>
            <td><?php echo $scores['remizi']; ?> </td>
            <td><?php echo $scores['body']; ?></td>
        </tr>
            <?php
        }
        ?>
        </tbody>

    </table>




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

