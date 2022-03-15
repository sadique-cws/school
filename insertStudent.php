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
                <div class="card">
                    <div class="card-body">
                        <h2>Insert Student</h2>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="send" class="btn btn-success w-100">
                            </div>
                        </form>

                        <?php 
                        if(isset($_POST['send'])){
                            $name = $_POST['name'];
                            $contact = $_POST['contact'];
                            $email = $_POST['email'];
                            $query = mysqli_query($connect,"insert into students (name,email,contact) value ('$name','$contact','$email')");
                            if($query){
                                echo "<script>window.open('manageStudents.php','_self')</script>";

                            }
                            else{
                                echo "<script>alert('creation fail! try again')</script>";

                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>