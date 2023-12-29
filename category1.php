<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="category1.php">Category Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-primary" href="create.php">Category Data</a>
            </li>
            
            </ul>
        </div>
    </div>
</div>



<?php
    if (isset($_SESSION['SuccessMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['SuccessMessage'];
                        unset($_SESSION['SuccessMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>


    <?php
    if (isset($_SESSION['ErrorMessage'])) {
    ?>
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['ErrorMessage'];
                        unset($_SESSION['ErrorMessage']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>




<div class="container">
        <div class="row justify-content-center">
            <div class="col card shadow">
                <form action="record.php" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-success text-uppercase">Category Form</h1>
                    </div>
                    <div class="my-3">
                        <label for="">Cat Id</label>
                        <input type="text" name="cat_id" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Cat Name</label>
                        <input type="text" name="cat_name" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Address</label>
                        <input type="address" name="address" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Mobile Number</label>
                        <input type="number" name="mobile_number" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Cat Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="submit" value="Submit" class="btn btn-success text-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>






                   