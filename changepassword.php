<?php
    
    include('db.php');
if(isset($_POST["email"]))
    $id      = $_POST["email"];
if(isset($_POST["password"]))
    $password = $_POST["password"];
if(isset($_POST["newpassword"]))
    $newpassword= $_POST["newpassword"];

    if(isset($password)){
        $sql="SELECT * FROM userinfo where id=$id and password=$password";
        $result=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($result);

        if($count == 1){

             $sql = "UPDATE userinfo SET password='$newpassword' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        
         echo json_encode(array(
                    "error" => 0
                  ));
    } else {
        echo json_encode(array(
                    "error" => 3
                  ));
    }

    mysqli_close($conn);     
        }
        else if($count == 0){
             
            echo json_encode(array(
                    "error" => 1
                    
                  ));
                  mysqli_close($conn); 
        }
       
    }

   
?>