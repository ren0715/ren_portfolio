<?php
    include "../action/userAction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Registration</title>
</head>
<body>

    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <div class="card-header bg-white text-datk-border-0">
                <h2 class="text-center">REGISTRATION</h2>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6 mt-3">
                            <input type="text" name="first_name" id="" class="form-control p-4" placeholder="FIRST NAME" required>

                        </div>
                        <div class="form-group col-md-6 mt-3">
                            <input type="text" name="last_name" id="" class="form-control p-4" placeholder="LAST NAME" required>
                            
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="username" id="" class="form-control p-4" placeholder="USERNAME" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" name="email" id="" class="form-control p-4" placeholder="E-MAIL" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="address" id="" class="form-control p-4" placeholder="ADDRESS" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="password" id="" class="form-control p-4" minlength="6" placeholder="PASSWORD" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="confirmPassword" id="" class="form-control p-4" minlength="6" placeholder="CONFIRM PASSWORD" required>
                        </div>
                    </div>
                    <p class="text-right small">Password must be 6 or more characters long.</p>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="submit" name="register" value="Register" class="btn btn-danger form-control text-uppercase">
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <a href="index.php" class="btn btn-dark form-control text-uppercase">Login</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>