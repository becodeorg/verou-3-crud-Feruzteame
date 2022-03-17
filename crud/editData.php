<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
die(mysqli_error($mysqli));

    if(count($_POST)>0) {
        mysqli_query($mysqli,"  UPDATE todolist set
                      date='" . $_POST['time'] . "' ,
                       list='" . $_POST['todolist'] . "',
                       note='" . $_POST['note'] ."'
                       WHERE id='" . $_GET['id'] . "' ");

        $message = "Record Modified Successfully";
//    header("Location: index.php");
//    exit();
    }


$result = mysqli_query($mysqli,"SELECT * FROM todolist WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="">
    <input type="date" name="time" value="<?php echo $row['time']; ?>">
    <br>
    <input type="text" name="todolist" value="<?php echo $row['todolist']; ?>">
    <br>
     <textarea name="note"  value="<?php echo $row['note']; ?>"></textarea>
    <br>
    <input type="submit" name="add" value="Update">

</form>
</body>
</html>

