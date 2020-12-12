<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php include_once("header.php")?>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <?php include_once("header.php")?>
    </header>

    <!-- Menu -->
    <?php include_once("menu.php")?>

    <!-- DB -->
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'futbal') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM users ORDER BY id DESC") or die($mysqli->error);
    ?>

    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1 style=" position: relative; right: -42%; padding-top: 5%;">Turnaj tímy</h1>
            </header>
            <div class="content">
                <p style="position: relative; right: -40%; padding-top: 2%;">Formulár pre prípadné zmeny v týmoch.<br />
                    </p>
            </div>
        </div>
    </section>

    <?php
    require_once("classes/CRUD.php");
    ?>
    <section id="form" class="major">
        <div class="inner">
            <form action="classes/CRUD.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="fields">

    <div id="team">
        <div class="container">
    <div class="row mt30">
        <div class="col-md-4 col-sm-4 col-xs-9">
            <div class="team-wrapper">
                <h3> <label>Názov</label></h3>
                <h4><input type="text" name="username"
                           value="<?php echo $username; ?>" placeholder="Vlož názov"/></h4>
            </div>
        </div>

            <div class="col-md-4 col-sm-4 col-xs-9">
                <div class="team-wrapper">
                    <h3> <label>Tím</label></h3>
                    <h4><input type="text" name="team"
                               value="<?php echo $team; ?>" placeholder="Vlož tím"/></h4>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-9">
                <div class="team-wrapper">
                    <h3> <label>Email</label></h3>
                    <h4><input type="email" name="email"
                               value="<?php echo $email; ?>" placeholder="Vlož email"/></h4>
                </div>
            </div>
        <div class="col-md-4 col-sm-4 col-xs-9">
            <div class="team-wrapper">
                <h3> <label>Počet hráčov</label></h3>
                <h4><input type="number" name="players"
                           value="<?php echo $players; ?>" placeholder="Vlož hráčov"/></h4>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-9">
            <div class="team-wrapper">

                <h4> <ul class="actions">
                        <?php
                        if ($update == true):
                            ?>
                            <li><input type="submit" value="Uprav" class="btn btn-default"  name="uprav"/></li>
                        <?php else: ?>
                        <li><input type="submit" value="Pridaj" class="primary" name="pridaj"/></li>
                    </ul>
                    <?php endif; ?></h4>
            </div>
        </div>

    </div>
        </div>

    </div>
            </form>
        </div>
    </section>


    <!-- Form -->

    <!-- Main -->
    <div id="main">



    </div>

    <!-- Footer -->
    <footer id="footer">
        <?php include_once("footer.php")?>
    </footer>

</div>

<!-- Scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
