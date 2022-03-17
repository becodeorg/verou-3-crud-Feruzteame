<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
die(mysqli_error($mysqli));
if(isset($_POST['add'])){
    $todolist = $_POST['todolist'];
    $time = $_POST['time'];
    $note = $_POST['note'];
    $mysqli-> query("INSERT INTO todolist (todolist, time, note) VALUES ('$todolist', '$time', '$note')") or
    die ($mysqli->error);
    $message = "Record Successfully";
}

