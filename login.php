<?php
include('db.php');
    $email      = $_POST["username"];
    $password   = $_POST["password"];
    if(isset($email)&&isset($password)){
        $sql="SELECT * FROM userinfo where email='$email' AND password='$password'";
        $result=mysqli_query($conn, $sql);
        $count=mysqli_num_rows($result);
        if($count == 1){
            $row = mysqli_fetch_array($result,MYSQLI_NUM) or die(mysqli_error());
            session_start();
            $_SESSION['id']=$row[0];
            $_SESSION['name']=$row[1];
            $_SESSION['email']=$row[3];
            $_SESSION['designation']=$row[7];
             $_SESSION['dept']=$row[6];
            if($row[7]=='HOD'){
                  mysqli_close($conn);
                  header('location:hod.php');
               }
            else{
                 $_SESSION['status']=$row[4];
                 $_SESSION['OID']=$row[5];
                 
                mysqli_close($conn);
                header('location:FPAForm.php');
           
              
        }
}
 
else{
            echo('<script type="text/javascript">alert("Email ID Or Password Worng");window.location="index.html";</script>');
            }
    }
?>