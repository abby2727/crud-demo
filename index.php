<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="create.php" method="POST" class="form-inline m2">
        <label for="">Name</label>
        <input type="text" name="name" id="name" class="form-control m-2">
        <label for="">Score</label>
        <input type="number" name="score" id="score" class="form-control m-2">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</body>

</html>