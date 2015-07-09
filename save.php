<?php
session_start();
include('db.php');

if($_SESSION['id']==NULL)
{
    header('location:index.html');
}
$email=$_SESSION['email'];
$userID=$_SESSION['id'];
$mongoid=$_SESSION['OID'];
$id = $_GET['id'];
if(isset($_GET['action'])){
    $action=$_GET['action'];
    if($action=="save"){
    
    print_r($id);
    $_SESSION['OID']=$id;
    $sql = "UPDATE userinfo SET mongoID='$id' WHERE id=$userID";
    if (mysqli_query($conn, $sql)) {
       
         echo json_encode(array(
                    "error" => 0,
                    "message" => "Updatted"
                  ));
    } else {
        echo json_encode(array(
                    "error" => 1,
                    "message" => "Updatted Failed"
                  ));
    }

    mysqli_close($conn);     
 
 }  
 else if($action=="submit"){
    $_SESSION['OID']=$id;
    $_SESSION['status']=1;
    $sql = "UPDATE userinfo SET mongoID='$id',status='1' WHERE id=$userID";
    if (mysqli_query($conn, $sql)) {
        
         echo json_encode(array(
                    "error" => 0,
                    "message" => "Submitted"
                  ));
    } else {
        echo json_encode(array(
                    "error" => 1,
                    "message" => "Updatted Failed"
                  ));
    }

    mysqli_close($conn);     
   
 }  
}
?>