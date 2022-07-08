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

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">

                <div class="card">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <h3><a class="text-success text-decoration-none" href="#">To-Do List App</a></h3>
                        </div>

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

                        <!-- READ -->
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include('read.php'); ?>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>



</body>

</html>