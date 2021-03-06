<?php
    require_once 'Database.php';
    //session_start();

    class User extends Database{
        //extends ~~ inheritance wwhere user class can inherit Database Properties.

        public function createUser($first_name,$last_name,$username,$email,$address,$password){
            $sql = "INSERT INTO users(first_name,last_name,username,email,address,password) Values('$first_name','$last_name','$username','$email','$address','$password')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD USER: ".$this->conn->error);
            }else{
                header("Location: ../views/index.php");
            }
        }

        public function addItem($name,$price,$s_quantity,$m_quantity,$l_quantity,$pic,$detail,$gender){
            $sql = "INSERT INTO items(name,price,s_quantity,m_quantity,l_quantity,image,detail,gender) Values('$name','$price','$s_quantity','$m_quantity','$l_quantity','$pic','$detail','$gender')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD ITEM: ".$this->conn->error);
            }else{
                return 1;
            }
        }
        public function editItemDetail($name,$price,$s_quantity,$m_quantity,$l_quantity,$pic,$detail,$gender,$item_id){
            $sql = "UPDATE items SET name = '$name', price = '$price', s_quantity = '$s_quantity', m_quantity = '$m_quantity', l_quantity = '$l_quantity',image = '$pic', detail = '$detail', gender = '$gender' WHERE item_id = $item_id";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT EDIT ITEM: ".$this->conn->error);
            }else{
                return 1;
            }
        }


        public function login($username,$password){
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){//nom_rows ~~ check rows inside the tabel
                return $result->fetch_assoc();//fetch or retrive the result row and convert arrow
            }else{
                return false;
            }
        }

        public function showAllItems(){
            $sql = "SELECT * FROM items";
            $result = $this->conn->query($sql);

            $items = array();

            if($result->num_rows > 0){
                while($item_details = $result->fetch_assoc()){
                   $items[] = $item_details;
                }
                return $items;
            }else{
                echo "No Record Found";
            }


        }
        public function getItem($item_id){
            $sql = "SELECT * FROM items WHERE item_id = $item_id";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                die("No Record Found: ".$this->conn->error);
            }


        }
        public function getOrders($id){
            $sql = "SELECT items.name as name,
            items.s_quantity as s_quantity,
            items.m_quantity as m_quantity,
            items.l_quantity as l_quantity,
            orders.item_id as item_id,
            items.image as image,
            orders.size as size,
            items.price as price,
            orders.buy_quantity as buy,
            orders.total as total,
            orders.order_id as order_id
             FROM orders INNER JOIN items ON orders.item_id = items.item_id 
              WHERE orders.user_id = $id";
            $result = $this->conn->query($sql);
           
            $orders = array();

            if($result->num_rows > 0){
                while($order_details = $result->fetch_assoc()){
                    $orders[] = $order_details;
                 }
                 return $orders;
            }else{
                return false;
            }


        }
        public function getRealOrders($id){
            $sql = "SELECT items.name as name,
            items.s_quantity as s_quantity,
            items.m_quantity as m_quantity,
            items.l_quantity as l_quantity,
            realOrders.item_id as item_id,
            items.image as image,
            realOrders.size as size,
            items.price as price,
            realOrders.buy_quantity as buy,
            realOrders.total as total,
            realOrders.real_order_id as order_id,
            realOrders.date_purchased as date_purchased
             FROM realOrders INNER JOIN items ON realOrders.item_id = items.item_id 
              WHERE realOrders.user_id = $id";
            $result = $this->conn->query($sql);
           
            $orders = array();

            if($result->num_rows > 0){
                while($order_details = $result->fetch_assoc()){
                    $orders[] = $order_details;
                 }
                 return $orders;
            }else{
                return false;
            }


        }
        public function getReciept($id,$date){
            $sql = "SELECT items.name as name,
            items.s_quantity as s_quantity,
            items.m_quantity as m_quantity,
            items.l_quantity as l_quantity,
            realOrders.item_id as item_id,
            items.image as image,
            realOrders.size as size,
            items.price as price,
            realOrders.buy_quantity as buy,
            realOrders.total as total,
            realOrders.real_order_id as order_id
             FROM realOrders INNER JOIN items ON realOrders.item_id = items.item_id 
              WHERE realOrders.user_id = $id AND realOrders.date_purchased = '$date'";
            $result = $this->conn->query($sql);
           
            $orders = array();

            if($result->num_rows > 0){
                while($order_details = $result->fetch_assoc()){
                    $orders[] = $order_details;
                 }
                 return $orders;
            }else{
                return false;
            }


        }
        
        public function editItem($a,$b,$c,$item_id,$id,$size,$quantity,$total){
            $sql = "UPDATE items SET 
            s_quantity = '$a',
            m_quantity = '$b',
            l_quantity = '$c'

            WHERE item_id = $item_id";

            $result = $this->conn->query($sql);
            if($result == false){
                die("CANNOT UPDATE quantity: ".$this->conn->error);
            }else{
                $sqll ="INSERT INTO orders(user_id,item_id,buy_quantity,total,size) Values('$id','$item_id','$quantity','$total','$size')";
                $resultt = $this->conn->query($sqll);
                if($resultt == false){
                    die("CANNOT UPDATE ORDER: ".$this->conn->error);
                }else{
                    header("Location: ../views/shopping.php#cart");
                }
                
            }
        }
        public function getOrder($order_id){
            $sql = "SELECT items.name as name,
            items.s_quantity as s_quantity,
            items.m_quantity as m_quantity,
            items.l_quantity as l_quantity,
            orders.item_id as item_id,
            items.image as image,
            orders.size as size,
            items.price as price,
            orders.buy_quantity as buy,
            orders.total as total
             FROM orders INNER JOIN items ON orders.item_id = items.item_id 
              WHERE orders.order_id = '$order_id'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                 return $result->fetch_assoc();
            }else{
                die("No Record Found: ".$this->conn->error);
            }


        }
        
        public function deleteOrder($order_id){
            $row = $this->getOrder($order_id);
            $z=$row['item_id'];
            if($row['size']=="S"){
                $a=$row['s_quantity']+$row['buy'];
                
                $sql="UPDATE items SET s_quantity = '$a' WHERE item_id = $z";
            }elseif($row['size']=="M"){
                $a=$row['m_quantity']+$row['buy'];
               
                $sql="UPDATE items SET m_quantity = '$a' WHERE item_id = $z";
            }elseif($row['size']=="L"){
                $a=$row['l_quantity']+$row['buy'];
                
                $sql="UPDATE items SET l_quantity = '$a' WHERE item_id = $z";
            }
            $result = $this->conn->query($sql);
            if($result == false){
                die("CANNOT UPDATE ITEM: ".$this->conn->error);
            }else{
                $sqll = "DELETE FROM orders WHERE order_id = '$order_id'";
                $resultt = $this->conn->query($sqll);

                if($resultt == false){
                    die("CANNOT DELETE ORDERS: ".$this->conn->error);
                }else{
                    header("Location: ../views/shopping.php#cart");
                }
                
            }
        }
        public function moveOrder(){
            
            $user_id = $_SESSION['id'];
            $row = $this->getOrders($_SESSION['id']);
            // date_default_timezone_set("Japan");
            // $datetime = date("Y-m-d H:i:s");
            // $_SESSION['date']=$datetime;
            if($row == NULL){
                echo "<div class='alert alert-warning alert-dismissible fade show text-center' role='alert'>
                <strong>ERROR!</strong>　You already moved orders. Please do not reload again.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
            }else{
                foreach($row as $ro){
                    $item_id = $ro['item_id'];
                    $buy = $ro['buy'];
                    $total = $ro['total'];
                    $size = $ro['size'];
                    //$order_id = $ro['order_id'];
                    $sql = "INSERT INTO realOrders(user_id,item_id,buy_quantity,total,size) VALUES('$user_id','$item_id','$buy','$total','$size') ";
                    $result = $this->conn->query($sql);
                    if($result == false){
                        die("CANNOT MOVE ORDERS: ".$this->conn->error);
                    }else{
                        
                    }
                }

                $sql = "DELETE FROM orders WHERE user_id = '$user_id'";
                $result = $this->conn->query($sql);

                if($result == false){
                    die("CANNOT DELETE ORDERS: ".$this->conn->error);
                }else{
                    return 1;
                }
            }
            
                
        }
        public function updateUser($credit,$pin,$month,$year){
            $user_id = $_SESSION['id'];
            $sql = "UPDATE users SET credit_card = '$credit', PIN = '$pin', cc_month = '$month', cc_year = '$year' WHERE user_id = $user_id ";
            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT UPDATE USER: ".$this->conn->error);
                
            }else{
                return 1;
            }


        }
        public function loginCredit($credit,$pin,$month,$year){
            $sql = "SELECT * FROM users WHERE credit_card = '$credit' AND PIN = '$pin' AND cc_month = '$month' AND cc_year = '$year'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){//nom_rows ~~ check rows inside the tabel
                return $result->fetch_assoc();//fetch or retrive the result row and convert arrow
            }else{
                return false;
            }
        }
        
        public function updateUserPro($first_name,$last_name,$username,$email,$address){
            $user_id = $_SESSION['id'];
            $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username', email = '$email', address = '$address' WHERE user_id = $user_id ";
            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT UPDATE USER: ".$this->conn->error);
                
            }else{
                return 1;
            }


        }

        public function showMENItems(){
            $sql = "SELECT * FROM items WHERE gender = 'MEN'";
            $result = $this->conn->query($sql);

            $items = array();

            if($result->num_rows > 0){
                while($item_details = $result->fetch_assoc()){
                   $items[] = $item_details;
                }
                return $items;
            }else{
                return false;
            }


        }

        public function showWOMENItems(){
            $sql = "SELECT * FROM items WHERE gender = 'WOMEN'";
            $result = $this->conn->query($sql);

            $items = array();

            if($result->num_rows > 0){
                while($item_details = $result->fetch_assoc()){
                   $items[] = $item_details;
                }
                return $items;
            }else{
                return false;
            }


        }

        public function showUNISEXItems(){
            $sql = "SELECT * FROM items WHERE gender = 'UNISEX'";
            $result = $this->conn->query($sql);

            $items = array();

            if($result->num_rows > 0){
                while($item_details = $result->fetch_assoc()){
                   $items[] = $item_details;
                }
                return $items;
            }else{
                return false;
            }


        }

        public function showUser(){
            $user_id=$_SESSION['id'];
            $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);


            if($result->num_rows ==1){
                return $result->fetch_assoc();
            }else{
                return false;
            }


        }
        public function deleteItem(){
            $item_id = $_GET['id'];
            $sql = "DELETE FROM items WHERE item_id = $item_id";
            $result = $this->conn->query($sql);

            if($result == false){
                die("Cannot delete: ".$this->conn->error);
            }else{
                header("Location: shopping.php#shopping");
                
            }


        }



    }


    
?>