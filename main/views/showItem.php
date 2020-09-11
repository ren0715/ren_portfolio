<?php
    include "../action/userAction.php";
    $row = $user->getItem($_GET['id']);
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

<div class="container my-5">
    <div class="row">
        <div class="col-lg-3">
            <img class="card-img-top" src="../uploads/<?=$row['image']?>" alt="">
        </div>
        <div class="col-lg-9">
            <div class="card h-100 px-5 py-5">
                <h4 class="card-title">
                  <?=$row['name']?>
                </h4>
                <h5>$<?=$row['price']?></h5>
                <h5>Stocks:</h5>
                <h5>S:<?=$row['s_quantity']?> items</h5>
                <h5>M:<?=$row['m_quantity']?> items</h5>
                <h5>L:<?=$row['l_quantity']?> items</h5>
                
                <p class="card-text lead">Detail:<?=$row['detail']?></p>
                <form action="../action/userAction.php?id=<?=$row['item_id']?>" method="post" class="form-inline">
                            
                        
                    <div class="form-group lead">
                        <select name="size" id="size" class="form-control">
                                <option value="" hidden>Select Size</option>
                                <option value="S">Small</option>
                                <option value="M">Midium</option>
                                <option value="L">Large</option>
                            </select>
                        <label for="">Buy Quantity:</label>
                        <input type="number" name="buy" class="form-control w-25 mx-3">
                        <input type="submit" name="btnBuy" value="Into Cart" class="btn btn-outline-primary">
                        <a href="shopping.php#shopping" class="btn btn-outline-success">Go Back</a>
                    </div>
                </form>
              
              <!-- <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div> -->
            </div>
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>