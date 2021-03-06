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
<link rel="stylesheet" href="../assets/css/style.css">
<title>Title</title>
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 my-5">
            <img class="card-img-top" src="../uploads/<?=$row['image']?>" alt="">
        </div>
        <div class="col-lg-6">
            <!-- <div class="card h-100 px-5 py-5"> -->
                <h1 class="text-center">Item Information</h1>
                <form action="" method="post" class="form-inline">
                    
                    
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th class="text-right w-50">
                                Item Name:

                                </th>
                                <th class="w-50">
                                    <?=$row['name']?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">
                                    Price:
                                </td>
                                <td>
                                    $<?=$row['price']?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    Gender:
                                </td>
                                <td>
                                    <?=$row['gender']?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    Stocks:
                                </td>
                                <td>
                                    S: <?=$row['s_quantity']?> items   <?php
                                    if($row['s_quantity'] == 0){
                                        echo "<span class='text-danger'>SOLD OUT!</span>";
                                        }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    M: <?=$row['m_quantity']?> items   <?php
                                    if($row['m_quantity'] == 0){
                                        echo "<span class='text-danger'>SOLD OUT!</span>";
                                        }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    L: <?=$row['l_quantity']?> items   <?php
                                    if($row['l_quantity'] == 0){
                                        echo "<span class='text-danger'>SOLD OUT!</span>";
                                        }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="border">
                                <strong>Detail</strong><br> <?=$row['detail']?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <select name="size" id="size" class="form-control" required>
                                        <option value="" hidden>Select Size</option>
                                        <option value="S">Small</option>
                                        <option value="M">Midium</option>
                                        <option value="L">Large</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="hidden" name="item_id" value="<?=$row['item_id']?>">
                                    Buy Quantity:
                                    <input type="number" name="buy" class="form-control w-25" min="1" max="100" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <button type="submit" name="btnBuy" class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i> Into Cart</button>
                                </td>
                                <td>
                                
                                    <a href="shopping.php#shopping" class="btn btn-outline-success"><i class="fas fa-angle-double-left"></i> Go Back</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                        
                                        if($_SESSION['role'] == "A"){
                                            $item_id=$row['item_id'];
                                            echo "<a href='editItem.php?id=$item_id' class='btn btn-outline-info w-50 float-right'><i class='fas fa-edit'></i> Edit</a>";
                                        }

                                    ?>
                                        
                                </td>
                                <td>
                                    <?php
                                        
                                        if($_SESSION['role'] == "A"){
                                            $item_id=$row['item_id'];
                                            echo "<a href='deleteItem.php?id=$item_id' class='btn btn-outline-danger  w-50'><i class='fas fa-trash-alt'></i> Delete</a>";
                                        }

                                    ?>
                                    
                                        
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
              
              <!-- <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div> -->
            <!-- </div> -->
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>