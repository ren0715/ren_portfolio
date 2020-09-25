
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
<title>EditUser</title>
</head>
<body>

    <div class="container">
            <div class="text-center mt-5">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                            <i class="fas fa-id-card fa-stack-1x fa-inverse"></i>
                        </span>
                    <h2 class="section-heading text-uppercase " style="font-size:2.5rem">Add Items</h2>
                    <h3 class="section-subheading font-italic text-muted" style="font-size:1rem">Only Admin can add items.</h3>
            </div>
        <div class="card mx-auto w-50 my-5 border border-0">

            <div class="cord-body">
                <form action="../action/userAction.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" name="name" id="" class="form-control" placeholder="Item Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="price" id="" class="form-control" placeholder="Item Price" required>
                        </div>
                        <div class="form-group col-md-4">

                            <select name="gender" id="" class="form-control" required>
                                <option value="" hidden>Select Jender</option>
                                <option value="MEN">MEN</option>
                                
                                <option value="WOMEN">WOMEN</option>
                                <option value="UNISEX">UNISEX</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <input type="number" name="s_quantity" id="" class="form-control" placeholder="S Quantity" min="0" max="100" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="m_quantity" id="" class="form-control" placeholder="M Quantity" min="0" max="100" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="l_quantity" id="" class="form-control" placeholder="L Quantity" min="0" max="100" required>
                        </div>
                    </div>
                    


            

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="file" name="image" id="" class="form-control border border-0" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea name="detail" cols="30" rows="10" class="form-control mb-5" placeholder="DETAIL" required></textarea>
                        </div>
                    </div>
                    

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <button type="submit" name="add" class="btn btn-primary w-100"><i class="fas fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="form-row">

                        <!-- <div class="form-group col-md-6">
                            <a href="logout.php" class="btn btn-warning form-control text-white"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
                        </div> -->
                        <div class="form-group col-md-12">
                            <a href="shopping.php" class="btn btn-dark form-control text-white"><i class="fas fa-home"></i> Home</a>
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