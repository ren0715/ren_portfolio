<?php

    require_once '../class/User.php';
    $user = new User();//object
    session_start();

    if(isset($_POST['register'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = md5($_POST['password']);//encryption == md5 == message digest
        $confirmPassword = md5($_POST['confirmPassword']);
        if($password == $confirmPassword){
            $user->createUser($first_name,$last_name,$username,$email,$address,$password);
        }else{
            echo "ConfirmPassword doesn't match";
        }


        
    }elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $login = $user->login($username,$password);
        if($login){
            $_SESSION['id'] = $login['user_id'];
            $_SESSION['first_name'] = $login['first_name'];
            $_SESSION['last_name'] = $login['last_name'];
            $_SESSION['username'] = $login['username'];
            $_SESSION['role'] = $login['role'];

            if($login['role'] == "A"){
                header("Location: ../views/addItem.php");
            }else{
                header("Location: ../views/shopping.php");
            }
            
        }else{
            echo "Incorrect Username and Password";
        }
    }elseif(isset($_POST['add'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $s_quantity = $_POST['s_quantity'];
        $m_quantity = $_POST['m_quantity'];
        $l_quantity = $_POST['l_quantity'];
        $pic = $_FILES['image']['name'];
        $detail = $_POST['detail'];
        $gender = $_POST['gender'];

        

        $target_dir = "../uploads/";//folder in your computer where you will place the image

        $target_file = $target_dir . basename($_FILES['image']['name']);

        $result = $user->addItem($name,$price,$s_quantity,$m_quantity,$l_quantity,$pic,$detail,$gender);

        if($result ==1){
            //upload file
            move_uploaded_file($_FILES['image']['tmp_name'],$target_file);

            header("Location: ../views/addItem.php");
        }else{
            echo "Error in Uploading the image ";
        }
    }elseif(isset($_POST['btnBuy'])){
        $quantity = $_POST['buy'];
        $size = $_POST['size'];
        $item = $user->getItem($_GET['id']);

        if($size=="S"){
            $a = $item['s_quantity'] - $quantity;

            $total = $quantity*$item['price'];

            if($a < 0){
                echo "<h1 class='display-2'>SORRY! We don't have enough stocks.</h1>";
            }else{
                $user->editItem($a,$item['m_quantity'],$item['l_quantity'],$item['item_id'],$_SESSION['id'],$size,$quantity,$total);
            }
        }elseif($size=="M"){
            $b = $item['m_quantity'] - $quantity;

            $total = $quantity*$item['price'];

            if($b < 0){
                echo "<h1 class='display-2'>SORRY! We don't have enough stocks.</h1>";
            }else{
                $user->editItem($item['s_quantity'],$b,$item['l_quantity'],$item['item_id'],$_SESSION['id'],$size,$quantity,$total);
            }
        }elseif($size=="L"){
            $c = $item['l_quantity'] - $quantity;

            $total = $quantity*$item['price'];

            if($c < 0){
                echo "<h1 class='display-2'>SORRY! We don't have enough stocks.</h1>";
            }else{
                $user->editItem($item['s_quantity'],$item['m_quantity'],$c,$item['item_id'],$_SESSION['id'],$size,$quantity,$total);
            }
        }
        
    }elseif(isset($_POST['buy'])){
        $result=$user->moveOrder();

        if($result == 1){
            header("Location: ../views/thanks.php");
        }
        
    }elseif(isset($_POST['pay'])){
        $credit = $_POST['credit'];
        $pin = md5($_POST['pin']);

        $result = $user->updateUser($credit,$pin);

        if($result ==1){
            $_SESSION['credit']=$credit;
            header("Location: ../views/thanks.php");
        }else{
            echo "Error in Uploading the user ";
        }
        
    }elseif(isset($_POST['update'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = md5($_POST['password']);//encryption == md5 == message digest
        $userrr = $user->showUser($_SESSION['id']);
        if($password ==$userrr['password']){
            $result = $user->updateUserPro($first_name,$last_name,$username,$email,$address);
            if($result ==1){
                $_SESSION['first_name']=$first_name;
                $_SESSION['last_name']=$last_name;
                $_SESSION['username']=$username;
                header("Location: ../views/shopping.php");
            }else{
                echo "Error in Uploading the user ";
            }
        }else{
            echo "Error in Uploading the userpass ";
        }

        
    }


?>