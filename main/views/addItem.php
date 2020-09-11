
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
<title>EditUser</title>
</head>
<body>

    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <div class="card-header bg-white text-dark border-0">
                <h2 class="display-4 text-center text-danger">Add Item</h2>
            </div>

            <div class="cord-body">
                <form action="../action/userAction.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" id="" class="form-control p-4" placeholder="Item Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="price" id="" class="form-control" placeholder="Item Price">
                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <input type="number" name="s_quantity" id="" class="form-control" placeholder="S Quantity">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="m_quantity" id="" class="form-control" placeholder="M Quantity">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" name="l_quantity" id="" class="form-control" placeholder="L Quantity">
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
                            <input type="submit" name="add" value="add" class="btn btn-danger form-control text-white">
                        </div>
                    </div>

                    <a href="logout.php">logout</a>

                </form>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>