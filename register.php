<?php
    
    include('db.php');
    $email      = $_POST["email"];
    $fullName   = $_POST["fullName"];
    $designation    = $_POST["designation"];
    $dept      = $_POST["dept"];
    if(isset($email)){
        $sql="SELECT email FROM userinfo where email='$email'";
        $result=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($result);
        if($count >= 1){
            echo json_encode(array(
                    "error" => 0,
                    "message" => "Already another account regisred with this Email ID"
                  ));
                  mysqli_close($conn); 
        }
        else{
        $password = randomString();
        $sql = "INSERT INTO userinfo (name,password,email,status,dept,designation)
                VALUES ('$fullName', '$password', '$email','0','$dept','$designation')";
            if (mysqli_query($conn, $sql)) {
               $headers = "From: fpa@mvsrec.edu.in"; 
               $subject="FPA Registration";
                $txt = "Username:     $email ; \n Password:   $password ; \n";
               if(mail($email,$subject,$txt,$headers)){
               echo json_encode(array(
                    "error" => 1,
                    "message" => "Registration Success.Check your mail for Password."
                  ));
                 }
                
            } 
             else{
                 echo json_encode(array(
                    "error" => 2,
                    "message" => "Registration Failed."
                  ));
             }     
       }
    }
    function randomString($length = 5) {
        $str = "";
        $characters = array_merge(range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
    $str .= $characters[$rand];
                                    }
    return $str;
    }
?>