<?php include "dbConfig.php";?>
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
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5>Login here</h5>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="login" class="btn btn-success w-100">
                            </div>
                        </form>
                        <?php 
                        if(isset($_POST['login'])){
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $query = mysqli_query($connect, "select * from admin where email='$email' AND password='$password'");
                            $count = mysqli_num_rows($query);
                            if($count > 0){
                                $_SESSION['admin'] = $email;
                                echo "<script>window.open('index.php','_self')</script>";

                            }
                            else{
                                echo "<script>alert('login fail! try again')</script>";

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