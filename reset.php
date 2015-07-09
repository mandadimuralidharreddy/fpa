<?php
include('db.php');
if(isset($_POST["action"]))
    $action=$_POST["action"];
if(isset($_POST["email1"]))
    $email=$_POST["email1"];

if(isset($email)){

        $sql="SELECT email,password FROM userinfo where email='$email'";
        $result=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($result);
        if($count == 1){
               $row = mysqli_fetch_array($result,MYSQLI_NUM) or die(mysqli_error());
               $password=$row[1];
               $headers = "From: fpa@mvsrec.edu.in"; 
               $subject="FPA Password Request";
                $txt = "Username:     $email ; \n Password:   $password ; \n";
               if(mail($email,$subject,$txt,$headers)){
               echo json_encode(array(
                    "error" => 1
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
                    "error" => 0
                    
                  ));
                  mysqli_close($conn); 
        }

}
?>