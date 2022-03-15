<?php include "dbConfig.php";
if(!isset($_SESSION['admin'])){
    echo "<script>window.open('login.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "header.php";?>

    <div class="container mt-2">
        <div class="row">
            <div class="col-3">
                <?php include "side.php";?>           
            </div>

            <div class="col-9">
                <div class="row">
                    <div class="col-6">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h1 class="display-3">
                                    <?php 
                                    $query = mysqli_query($connect,"select * from students");

                                    echo $count = mysqli_num_rows($query);
                                    ?>
                                </h1>
                                <h6>Total Students</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h1 class="display-3"> <?php 
                                    $query = mysqli_query($connect,"select * from admin");

                                    echo $count = mysqli_num_rows($query);
                                    ?></h1>
                                <h6>Total Admins</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>