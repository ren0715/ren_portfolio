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
<title>Login</title>
</head>
<body>

    <div class="container">
        <div class="card mx-auto my-5 w-50 border border-0">
            <div class="card-header bg-white text-dark border-0">
                <h2 class="text-center">LOGIN</h2>
            </div>

            <div class="card-body">
                <form action="../action/userAction.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-3">
                            <input type="text" name="username" id="" class="form-control p-4" placeholder="USERNAME" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-3">
                            <input type="password" name="password" id="" class="form-control p-4" placeholder="PASSWORD" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-3">
                            <input type="submit" name="login" value="Login" class="btn btn-dark form-control text-uppercase" placeholder="USERNAME">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 mb-3">
                            <a href="registration.php" class="btn btn-success form-control text-uppercase">Create Account</a>
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