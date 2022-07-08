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
    <div class="container mt-4">
        <!-- READ -->
        <table class="table">
            <tbody>
                <?php include('read.php'); ?>
            </tbody>
        </table>

        <!-- CREATE -->
        <form action="create.php" method="POST" class="form-inline">
            <div class="row">
                <div class="col">
                    <label for="">Names</label>
                    <input type="text" name="name" id="name" class="form-control mb-2">
                </div>
                <div class="col">
                    <label for="">Score</label>
                    <input type="number" name="score" id="score" class="form-control mb-2">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>

</html>