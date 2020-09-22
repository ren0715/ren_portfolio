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
<link rel="stylesheet" href="../css/styles.css">
<title>Registration</title>
</head>
<body>
<?php
    $row = $user->showUser();
?>
    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <!-- <div class="card-header bg-white text-datk-border-0">
                <h2 class="text-center text-uppercase">'s Profile</h2>
            </div> -->
            <div class="text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-id-card fa-stack-1x fa-inverse"></i>
                        </span>
                    <h2 class="section-heading text-uppercase " style="font-size:2.5rem">Your Profile</h2>
                    <h3 class="section-subheading font-italic text-muted" style="font-size:1rem">You can change your information.</h3>
            </div>


            <div class="card-body">
                <form action="" method="post">
                    
                    <div class="form-row">
                        <div class="form-group col-md-6 mt-3">
                            <input type="text" name="first_name" id="" class="form-control p-4" value="<?=$row['first_name']?>" required>

                        </div>
                        <div class="form-group col-md-6 mt-3">
                            <input type="text" name="last_name" id="" class="form-control p-4" value="<?=$row['last_name']?>" required>
                            
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="username" id="" class="form-control p-4" value="<?=$row['username']?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" name="email" id="" class="form-control p-4" value="<?=$row['email']?>" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="address" id="" class="form-control p-4" value="<?=$row['address']?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="password" id="" class="form-control p-4" placeholder="PASSWORD" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <button type="submit" name="update" class="btn btn-success text-uppercase w-100"><i class="fas fa-edit"></i> update</button>
                        </div>
                        <div class="form-group col-md-6">
                            <a href="shopping.php" class="btn btn-primary form-control text-uppercase"><i class="fas fa-angle-double-left"></i> Shopping</a>
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