<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style/style.css">
    <title>create data</title>

</head>
<body>
<form action="index.php" method="get">
    <fieldset >
        <legend>Fill in your list here</legend>
        <label class="form-label">Date</label></br>
        <input type="date" name='time'> <br/>
        <label  class="form-label">Name of list</label></br>
        <input type="text" name='todolist' ><br>
        <label  class="form-label">Description Note</label></br>
        <textarea type="text" name='note'> </textarea><br/>
        <input type="submit" name='add'  id="submit"><br/>
    </fieldset>
</form>

</div>
</body>
</html>