<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or
die(mysqli_error($mysqli));

$sql = "DELETE FROM todolist WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($mysqli, $sql)) {
        header("Location: index.php");
        exit();
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
