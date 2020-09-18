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
<title>Title</title>
</head>
<body>
<div class="row text-center mb-5">
        <div class="container my-5">
            <h3 class="">This is your purchase history.</h3>
        </div>
                    <?php
                        $result = $user->getRealOrders($_SESSION['id']);
                        $sum=0;
                            
                        foreach($result as $row){
                            //$image = $row['user_picture'];
                    
                    ?>
                    

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                        <a href="showItem.php?id=<?=$row['item_id']?>"><img class="card-img-top" src="../uploads/<?=$row['image']?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                            <a href="showItem.php?id=<?=$row['item_id']?>"><?=$row['name']?></a>
                            </h4>
                            <h5>$<?=$row['price']?></h5>
                            <h5>Size:<?=$row['size']?></h5>
                            <h5>Buy Quantity:<?=$row['buy']?></h5>
                            <h5>Total Price:$<?=$row['total']?></h5>
                        </div>
                        </div>
                    </div>
                    <?php
                    $sum+=$row['total'];
                    
                        }
                    $_SESSION['total']=$sum;
                    ?>
                    </div>
                    
                
                <h3 class="text-center mb-5">Total:$<?=$_SESSION['total']?></h3>
                <div class="container mb-5 text-center">
                    <a href="logout.php" class="btn btn-danger text-uppercase"><i class="fas fa-sign-in-alt"></i> logout</a>
                    <a href="shopping.php#shopping" class="btn btn-primary text-uppercase"><i class="fas fa-shopping-cart"></i> Continue Shopping</a>
                </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>