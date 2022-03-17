<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<?php
include_once "insertData.php";
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
die(mysqli_error($mysqli));
$data = $mysqli->query ("SELECT * FROM todolist") or die(($mysqli->error));

?>
<div>
    <table  class="table table-striped">
        <thead>
        <tr>
            <th hidden>id</th>
            <th>Date</th>
            <th>List</th>
            <th>Note</th>
        </tr>
        </thead>
        <?php
        if ( $data->num_rows > 0){
        while($row =  $data->fetch_assoc()){ ?>
        <tr>
            <td hidden> <?php echo $row ['id'] ?> </td>
            <td> <?php echo $row ['time'] ?> </td>
            <td> <?php echo $row ['todolist'] ?> </td>
            <td> <?php echo $row ['note'] ?> </td>
            <td><a href="editData.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="deleteData.php?id=<?php echo $row["id"] ; ?>">Delete</a></td>
            </tr> <?php }
                }else{
                    echo '<p>YOU DO NOT HAVE ANY TASK TO DO</p>';
                } ?>
        </table>
</div>
</body>
</html>