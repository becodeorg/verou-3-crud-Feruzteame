<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>

<?php
    include_once 'crud.php';
    $mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
    die(mysqli_error($mysqli));
    $data = $mysqli->query ("SELECT * FROM todolist") or die(($mysqli->error));

    ?>
<div>
    <table  class="table table-success table-striped">
        <thead>
        <tr>
            <th>List</th>
            <th>Time</th>
        </tr>
        </thead>
        <?php
        if ( $data->num_rows > 0){
            while($row =  $data->fetch_assoc()){ ?>
            <tr>
                <td> <?php echo $row ['todolist'] ?> </td>
                <td> <?php echo $row ['time'] ?> </td>
            </tr> <?php }
        }else{
        echo '<p> 0 </p>';
        } ?>
        </table>
</div>
</body>
</html>