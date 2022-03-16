<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TodoList</title>
</head>
<body>
  <h1>Todolist </h1>
      <form action="" method="post">
          <input type="hidden" type="number" name='id'><br>
         <input type="text" name='todolist'><br>
         <input type="date" name='time'  ><br/>
        <textarea type="text" name='note'> </textarea><br/>
         <input type="submit" name='add' spellcheck="true"><br/>
     </form>
    <?php  include_once 'readData.php'; ?>

</body>
</html>