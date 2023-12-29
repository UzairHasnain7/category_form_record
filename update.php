
<?php

include 'conn.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `crud` WHERE `cat_id` = '$id'";
$run = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($run);



?>


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
            <div class="col-12 card shadow">
                <form action="updateData.php" method="POST" enctype="multipart/form-data">
                    <div class="my-3 text-center">
                        <h1 class="text-primary text-uppercase">Update Category</h1>
                    </div>
                    <div class="my-3">
                        <label for="">Cat id</label>
                        <input type="text" name="cat_id" value="<?php echo $row[0]; ?>" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Cat Name</label>
                        <input type="text" name="cat_name" value="<?php echo $row[1]; ?>" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Address</label>
                        <input type="address" name="address" value="<?php echo $row[2]; ?>" class="form-control">
                    </div>
                   
                    <div class="my-3">
                        <label for="">Mobile Number</label>
                        <input type="number" name="mobile_number" value="<?php echo $row[3]; ?>" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Price</label>
                        <input type="number" name="price" value="<?php echo $row[4]; ?>" class="form-control">
                    </div>
                    <img src="<?php echo $row[5];  ?>" width="120" height="80" alt="">
                    <input type="hidden" name="old_image" value="<?php echo $row[6]; ?>">
                    <div class="mb-3">
                        <label for="">Enter Cat Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="updatebtn" value="Update" class="btn btn-primary w-75">
                    </div>
                </form>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>