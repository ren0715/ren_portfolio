<?php
    require_once 'Database.php';

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

        public function addItem($name,$price,$s_quantity,$m_quantity,$l_quantity,$pic,$detail){
            $sql = "INSERT INTO items(name,price,s_quantity,m_quantity,l_quantity,image,detail) Values('$name','$price','$s_quantity','$m_quantity','$l_quantity','$pic','$detail')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD ITEM: ".$this->conn->error);
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
                return false;
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
        public function deleteOrderForever(){
            
            $user_id = $_SESSION['id'];
            $sql = "DELETE FROM orders WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT DELETE ORDERS: ".$this->conn->error);
            }else{
                header("Location: ../views/thanks.php");
            }
                
        }


        

    }


    
?>