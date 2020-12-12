<?php


session_start();
$_SESSION['message']='';

$mysqli=new mysqli('localhost','root','','futbal');
//$sponzory = $db->getSponzory();

if($_SERVER['REQUEST_METHOD']=='POST') {

    if($_POST['password']==$_POST['confirmpassword']) {

        $username = $mysqli->real_escape_string($_POST['username']);
        $team = $mysqli->real_escape_string($_POST['team']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $players = $mysqli->real_escape_string($_POST['players']);

        $sql = "INSERT INTO users (username, team, email, password, players)"
            . "VALUES('$username', '$team', '$email', '$password', '$players')";

        //ak prebehne prenos uspesne prenes nas na uvitaciu stranku

        if ($mysqli->query($sql) === true) {
            $_SESSION['message'] = 'Registracia tvojho timu: $team  prebehla uspesne!';
            header("location: klub.php");
            exit();
        } else {
            $_SESSION['message'] = "Tim Nebol pridany";
        }
    }
    else{
        $SESSION['message']="Zadané heslá sa nezhodujú!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("header.php"); ?>



    <style>
        div.zoznam_tymov{
            position: relative;
            float:right;
            right:-55%;
           bottom:400px;

        }
        .styled-table1{
            border-collapse: collapse;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 80%;
            box-shadow: 0 0 20px rgba(148, 148, 148, 0.15);
            margin-left: 10%;

        }
        .styled-table1 thead tr{
            background-color: #dedbdb;
            color: #ffffff;
            text-align: left;
        }
        .styled-table1 th,
        .styled-table1 td{
            padding: 12px 15px;
        }
        .styled-table1 tbody tr{
            border-bottom: 1px solid #dddddd;
        }

        .styled-table1 tbody tr:last-of-type{
            border-bottom: 2px solid #009879;
        }

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
<div id="team">
    <div class="container">

        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h3 style=" font-style: italic ; position: relative; left: 150px;"> Ste prihlásený ako admin</h3>
                <h2>Vianočný futbalový turnaj</h2>
                <p>Prihlás sa so svojimi kamošmi na vianočný futbalový turnaj. Využi tak možnosť predviesť svoje schopnosti a zviditeľniť sa. Vytvor so svojou partiou tím a dokážte že ste najlepší</p>
            </div>
        </div>
        <?php
        echo $_SESSION['message'];
        ?>


        <?php
        $mysqli = new mysqli('localhost', 'root', '', 'futbal') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM users ORDER BY id DESC") or die($mysqli->error);
        ?>


        <?php
        require_once("classes/CRUD.php");
        ?>




<h3>
    Registračný formulár :
</h3>


        <div class="col-md-8 col-sm-8 mt30">
                <div class="col-md-6 col-sm-6">
     <form class ="form" method="post" enctype="multipart/form-data" autocomplete="off">
         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
         <input type ="text" placeholder="Prihlasovacia osoba" name="username" required/>
             </div>
         </div>

         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
         <input type ="text" placeholder="Názov týmu" name="team" required/>
             </div>
         </div>

         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
     <input type ="email" placeholder="Email" name="email" required/>
             </div>
         </div>
         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
     <input type ="password" placeholder="Heslo" name="password" autocomplete="new-password" required/>
             </div>
         </div>

         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
         <input type ="password" placeholder="Potvrdzovacie heslo" name="confirmpassword" autocomplete="new-password" required/>
             </div>
         </div>
         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
         <input type ="number" placeholder="Počet hráčov" name="players" required/>
             </div>
         </div>

         <div class="col-md-8 col-sm-8 mt30">
             <div class="col-md-6 col-sm-6">
     <input type ="submit" value="Registrovať tím"  class="btn btn-default" name ="register"/>
             </div>
         </div>
     </form>
 </div>


            <h3 style="float:right; position: relative; top:-90px; left: 140px; ">
            Prihlásené tímy :
            </h3>

            <?php
            include_once("classes/DB.php");

            use classes\DB;


            $db = new DB("localhost", "root", "", "futbal");

            $sponzory = $db->getSponzory();
            $users = $db->getUsers();

            ?>

            <div class="zoznam_tymov">
            <div class="col-md-8 col-sm-8 mt30">
                <div class="col-md-6 col-sm-6">



                <table class="styled-table1">
                    <thread>
                        <tr>
                            <th>id </th>
                            <th>Meno </th>
                            <th>Tím </th>
                            <th>Email </th>
                            <th>Hráči </th>
                            <th>Upravi </th>
                            <th>Mazanie</th>

                        </tr>
                    </thread>
                    <tbody>


            <section id="one" class="tiles">
                <?php
                while ($tile = $result->fetch_assoc()):
                    ?>


              <header class="major">
                            <td><?php echo $tile['id']; ?></td>
                            <td><?php echo $tile['username']; ?> </td>
                            <td><?php echo $tile['team']; ?> </td>
                            <td><?php echo $tile['email']; ?> </td>
                            <td><?php echo $tile['players']; ?> </td>
                            <td><a href="admin.php?edit=<?php echo $tile['id']; ?>" class="btn btn-default">Upravit</a></td>
                            <td><a href="classes/CRUD.php?delete=<?php echo $tile['id']; ?>" class="btn btn-default">Odstraniť</a></td>
                </header>


                <?php endwhile; ?>

            </section>

                    </tbody>
                </table>
        </div>
                </div>
            </div>
<!-- footer section -->



<!-- javascript js -->
<?php include_once("footer.php"); ?>
</body>
</html>


