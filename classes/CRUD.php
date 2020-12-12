<?php

$mysqli = new mysqli('localhost', 'root', '', 'futbal')
or die(mysqli_error($mysqli));

$update = false;
$id = 0;
$username = '';
$team = '';
$email = '';
$password = '';
$players = '';


if (isset($_POST['pridaj'])){
    $id=$_POST['id'];
    $username = $_POST['username'];
    $team = $_POST['team'];
    $email = $_POST['email'];
    $players = $_POST['players'];


    $mysqli->query("INSERT INTO users (id,usename, team, email, players) VALUES ('$id','$username', '$team', '$email', '$players')") or die($mysqli->error);

    header("location: ../klub_admin.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error);

    header("location: ../klub_admin.php");
}

if (isset($_GET) && array_key_exists('edit',$_GET)){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM users WHERE id='$id'") or die($mysqli->error);
        $tile = $result->fetch_array();
    $id = $tile['id'];
        $username = $tile['username'];
        $team = $tile['team'];
        $email = $tile['email'];
        $players = $tile['players'];

}

if (isset($_POST['uprav'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $team = $_POST['team'];
    $email = $_POST['email'];
    $players = $_POST['players'];

    $mysqli->query("UPDATE users SET id='$id', username='$username', team='$team', email='$email', players='$players' WHERE id=$id") or
            die($mysqli->error);

    header("location: ../klub_admin.php");
}