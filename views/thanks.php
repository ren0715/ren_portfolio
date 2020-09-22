<?php


    include_once "../action/userAction.php";

    $user->moveOrder();
    
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
<title>Title</title>
</head>
<body>
    <h1 class="display-3 mt-5 font-bold text-center">Thank You For Your Purchase!</h1>
    
    <div class="row text-center mb-5">
            <div class="col-12 text-center my-5">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-receipt fa-stack-1x fa-inverse"></i>
                        </span>
                    <h2 class="section-heading text-uppercase " style="font-size:2.5rem">history</h2>
                    <h3 class="section-subheading font-italic text-muted" style="font-size:1rem">This is the history of purchases.</h3>
            </div>
            <div class="card mx-auto mb-5">
                <div class="card-body">

                <table class="table w-100 table-borderless">
                    <tbody>
                    <?php
                        $result = $user->getRealOrders($_SESSION['id']);
                        $sum=0;
                        if($result==NULL){

                            echo "<p class='col-md-12 h2 mx-auto my-5'>No Record Found.</p>";

                        }else{

                        
                        foreach($result as $row){
                            //$image = $row['user_picture'];
                    
                    ?>
                    

                    <!-- <div class="col-lg-4 col-md-6 mb-4"> -->
                        <!-- <div class="card h-100"> -->
                        <!-- <a href="showItem.php?id=<?//$row['item_id']?>"><img class="card-img-top" src="../uploads/<?//$row['image']?>" alt=""></a> -->
                        <!-- <div class="card-body"> -->
                            <!-- <h4 class="card-title"> -->
                        <tr>
                            <td>
                                <a class="h4" href="showItem.php?id=<?=$row['item_id']?>"><?=$row['name']?></a>
                                <span class="h6">(<?=$row['size']?>)(<?=$row['buy']?>)</span>
                            </td>
                            
                            <td class="text-right">
                                <h5>$<?=$row['total']?></h5>
                            </td>
                        </tr>
                            
                            <!-- </h4> -->
                            <!-- <h5>$<?$row['price']?></h5> -->
                            
                            

                        <!-- </div> -->
                        <!-- </div> -->
                    <!-- </div> -->
                    <?php
                    $sum+=$row['total'];
                    
                        }
                    ;
                    $tax = round($sum*0.1,2);
                    $_SESSION['total']=$sum+$tax;
                    ?>
                    </div>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr class="border-top">
                        <td colspan="2"></td>
                    </tr>

                    <tr>
                        <td>
                        <h5>Sub Total</h5>
                        </td>
                        <td class="text-right">
                        <h5>$<?=$sum?></h5>
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <h5>Tax<span class="h6">(10%)</span></h5>
                        </td>
                        <td class="text-right">
                        <h5>$<?=$tax?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <h3>Total</h3>
                        </td>
                        <td class="text-right">
                        <h3>$<?=$_SESSION['total']?></h3>
                        </td>
                    </tr>
                    <?php
                            }
                    ?>
                </tbody>
                </table>
                </div>
            </div>
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