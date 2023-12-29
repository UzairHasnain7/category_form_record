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




    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <table id="datatable" class="table text-center align-middle table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Cat Id</th>
                                                <th>Cat Name</th>
                                                <th>Address</th>
                                                <th>Mobile Number</th>
                                                <th>Price</th>
                                                <th>Cat Image</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
<?php

include 'conn.php';

$sql = "SELECT * FROM `crud`";
$run = mysqli_query($conn, $sql);

$totalRows = mysqli_num_rows($run);

if($totalRows != 0)
{
    while($row = mysqli_fetch_array($run))
    {
        ?>

        <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td> <img src="<?php echo $row[5]; ?>"
        width="100" height="80" /></td>
        <td><a href="update.php?id=<?php echo $row
        [0]; ?>"><i class="fa-solid text-info fa-pen-to-square"></i>
        </a> <a href="delete.php?id=<?php echo $row
        [0]; ?>"><i class="fa-solid text-danger fa-trash"></i></a></td>
        </tr>

        <?php
    }
}
else
{
    ?>

    <tr><td colspan="4" class="text-center"><?php echo "No Record Found"; ?></td>
    </tr>
    <?php
}
?>  
        </tbody>
    </table>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>