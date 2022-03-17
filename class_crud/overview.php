<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Your TodoList</title>
</head>
<body>

<div id="heading">
    <h1>ToDoList</h1>
    <button id="create">
        <a class="d-block" href="createForm.php">Add List</a>
    </button>
</div>

   <table id="table"  class="table">
            <tr>
                <th>date</th>
                <th>list</th>
                <th>note</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($cards as $card) : ?>
            <tr>
                <td><?= $card['time'] ?></td>
                <td><?= $card['todolist'] ?></td>
                <td><?= $card['note'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $card['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="index.php?action=delete&id=<?= $card['id'] ?>">Delete</a>
                </td>
            </tr>

            <?php endforeach; ?>

        </table>


</body>
</html>