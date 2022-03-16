<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
die(mysqli_error($mysqli));
if(count($_POST)>0) {
    mysqli_query($mysqli,"UPDATE todolist set list='" . $_POST['list'] . "' , date='" . $_POST['date'] . "',  note='" . $_POST['note'] ."' WHERE id='" . $_POST['id'] . "'");
    $message = "Record Modified Successfully";
}

$result = mysqli_query($mysqli,"SELECT * FROM todolist WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
</head>
<body>
<form method="post" action="">

    <input type="text" name="todolist" value="<?php echo $row['todolist']; ?>">
    <br>
    <input type="date" name="time" value="<?php echo $row['time']; ?>">
    <br>

    <input type="text" name="note"  value="<?php echo $row['note']; ?>">
    <br>
    <input type="submit" name="add" value="add">

</form>
</body>
</html>