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
<title>EditItem</title>
</head>
<body>

    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <div class="card-header bg-white text-dark border-0">
                <h2 class="display-4 text-center text-info">Edit Item</h2>
            </div>

            <div class="cord-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" name="name" id="" class="form-control" placeholder="Item Name" value="<?=$row['name']?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="price" id="" class="form-control" placeholder="Item Price" value="<?=$row['price']?>" required>
                        </div>
                        <div class="form-group col-md-4">

                            <select name="gender" id="" class="form-control" required>

                                <?php
                                    if($row['gender'] == "MEN"){
                                        echo "<option value='MEN' selected>MEN</option>";
                                
                                        echo "<option value='WOMEN'>WOMEN</option>";
                                        echo "<option value='UNISEX'>UNISEX</option>";
                                    }elseif($row['gender'] == "WOMEN"){
                                        echo "<option value='MEN'>MEN</option>";
                                
                                        echo "<option value='WOMEN' selected>WOMEN</option>";
                                        echo "<option value='UNISEX'>UNISEX</option>";
                                    }elseif($row['gender'] == "UNISEX"){
                                        echo "<option value='MEN'>MEN</option>";
                                
                                        echo "<option value='WOMEN'>WOMEN</option>";
                                        echo "<option value='UNISEX' selected>UNISEX</option>";
                                    }
                                ?>
                                

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <input type="number" name="s_quantity" id="" class="form-control" value="<?=$row['s_quantity']?>" placeholder="S Quantity" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="m_quantity" id="" class="form-control" value="<?=$row['m_quantity']?>" placeholder="M Quantity" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="l_quantity" id="" class="form-control" value="<?=$row['l_quantity']?>" placeholder="L Quantity" required>
                        </div>
                    </div>
                    


            

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="image" class="small">If you don't select this file, the image remains the same.</label>
                            <input type="file" name="image" id="" class="form-control border border-0"  >
                            <input type="hidden" name="img" value="<?=$row['image']?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea name="detail" cols="30" rows="10" class="form-control mb-5" placeholder="DETAIL" required><?=$row['detail']?></textarea>
                            <input type="hidden" name="item_id" value="<?=$row['item_id']?>">
                        </div>
                    </div>
                    

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <button type="submit" name="editItemDetail" class="btn btn-info w-100"><i class="fas fa-plus"></i> Edit</button>
                        </div>
                    </div>
                    <div class="form-row">

                        <!-- <div class="form-group col-md-6">
                            <a href="logout.php" class="btn btn-warning form-control text-white"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
                        </div> -->
                        <div class="form-group col-md-12">
                            <a href="showItem.php?id=<?=$row['item_id']?>" class="btn btn-dark form-control text-white"><i class="fas fa-check"></i> Check the Change</a>
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