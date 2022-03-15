<?php

// make connection
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
die(mysqli_error($mysqli));

if(isset($_POST['add'])){
    $todolist = $_POST['todolist'];
    $time = $_POST['time'];
    $mysqli-> query("INSERT INTO todolist (todolist, time) VALUES ('$todolist', '$time')") or
    die ($mysqli->error);
}