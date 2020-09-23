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



<link href="../css/styles.css" rel="stylesheet" />
<title>EditUser</title>
</head>
<body>
<?php
    $row = $user->showUser();
?>
    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <!-- <div class="card-header bg-white text-dark border-0">
                <h2 class="display-4 text-center text-success">Input Your Credit Card Number</h2>
            </div> -->
            <div class="text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-credit-card fa-stack-1x fa-inverse"></i>
                        </span>
                    <h2 class="section-heading text-uppercase " style="font-size:2.5rem">Input your credit card number</h2>
                    <h3 class="section-subheading font-italic text-muted" style="font-size:1rem">You can regist only one credit card. Available brand is here.</h3>
                    <h4 class="mb-5 h2">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-jcb"></i>
                    </h4>
            </div>

            <div class="cord-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="credit" id="" class="form-control p-4"  value="<?=$row['credit_card']?>" placeholder="0000-0000-0000-0000" required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" name="pin" id="" class="form-control p-4" placeholder="PIN code" required>
                        </div>
                    </div>
                    

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <input type="submit" name="pay" value="Pay" class="btn btn-primary form-control text-white">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <a href="payByCash.php" class="btn btn-success form-control text-white"><i class="fas fa-money-bill-wave"></i> Pay By Cash</a>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <a href="shopping.php" class="btn btn-secondary form-control text-white"><i class="fas fa-angle-double-left"></i> Go Back to Shopping</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>