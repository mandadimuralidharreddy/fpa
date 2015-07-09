<?php
session_start();
include('db.php');
if(!isset($_SESSION['id']))
{
    header('location:index.html');
}
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$dept=$_SESSION['dept'];
$designation=$_SESSION['designation'];
$sql="SELECT name,email,dept,designation,mongoID FROM userinfo where dept='$dept' AND status='1'";       
$result=mysqli_query($conn, $sql);
if($result){
$rows = resultToArray($result);
$result->free();

}
function resultToArray($result) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>HOD Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<div class="navbar" style="background-color: #EBEBEB;">

                <ul class="nav navbar-nav"style="padding-left: 30px;font-size: 20px;" >
                    
                    <li class="heading" >ANNUAL  FACULTY  PERFORMANCE  APPRAISAL</li> 
                      
                </ul> 
                
                <li style="float: right;list-style-type: none;"><a href="logout.php" class="btn btn-info" style="height: 45px;">LOGOUT</a></li>
<li style="float: right;list-style-type: none;"><a href="" data-toggle="modal" data-target="#myModal" class="btn btn-info" style="height: 45px;">Change Password</a></li>
</div>
<div class="container">
<div class="row" style="padding-top: 20px">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead></thead>
                    <tbody>
                        <tr>

                            <td><label for="name">Name: </label><span name="name" id="name"> <?php echo $name; ?></span></td>
                            <td><label for="designation">Designation: </label><span name="designation" id="designation" ><?php echo $designation ?></span>
                                                                    </td>
                            <td><label for="dept">Dept:</label><span name="dept" id="dept" ><?php echo $dept; ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
<table class="table table-bordered">
<thead>
<tr>
<th>Name</th>
<th>Email ID</th>
<th>Dept</th>
<th></th>
</tr>
</thead>
<tbody>
<? foreach($rows as $row) { ?>
    <tr> 
        <td><? echo $row['name'];$sname=$row['name']; ?></td>
         <td><? echo $row['email']; ?></td>
         <td><? echo $row['dept'];$sdept=$row['dept'];$sid=$row['mongoID'];$sdesignation=$row['designation']; ?></td>

         <td><? echo "<a class='btn btn-info'target='_blank' href='hodedit.php?sid=$sid&sdesignation=$sdesignation&designation=$designation&sdept=$sdept&sname=$sname'>Enter</a>" ?></td>
    </tr>
<? } ?>
</tbody>
</table>
        </div>
</div>
<form id="changePassword">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Information</h4>
      </div>
      <div class="modal-body">
         <div class="control-group">
            <label for="current_password" class="control-label">Current Password</label>
            <div class="controls">
                <input name="current_password" id="current_password" type="password" required>
            </div>
        </div>
        <div class="control-group">
            <label for="new_password" class="control-label">New Password</label>
            <div class="controls">
                <input name="new_password" id="new_password" type="password" required>
            </div>
        </div>
        <div class="control-group">
            <label for="confirm_password" class="control-label">Confirm Password</label>
            <div class="controls">
                <input name="confirm_password" id="confirm_password" type="password" required>
            </div>
        </div> 
	<div id="updatesuccess" class="alert alert-success" style="display:none">
			    			<p class="menuitem">Updated Successfully.<p>
			    		</div>
			    		<div id="updatefail" class="alert alert-danger" style="display:none">
			    			<p class="menuitem">Updated Failed.<p>
			    		</div>
<div id="oldpasswordwrong" class="alert alert-danger" style="display:none">
			    			<p class="menuitem">Old Password Wrong<p>
			    		</div>
<div id="retypepassword" class="alert alert-danger" style="display:none">
			    			<p class="menuitem">New Password And Confirm Password not same<p>
			    		</div>
      </div>
      <div class="modal-footer">
        <button href="#" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button  class="btn btn-primary" type="submit" id="password_modal_save">Change Password</button>
      </div>
    </div>

  </div>
</div>
</div>
</body>

<script type="text/javascript">
var form1 = document.getElementById('changePassword');
form1.onsubmit = function(event) {
	event.preventDefault();
	
		var password1=$("#current_password").val();
                var newpassword1=$("#new_password").val();
                var confirmpassword1=$("#confirm_password").val();
                var email1='<?php echo $id;?>';
                var n = newpassword1.localeCompare(confirmpassword1); 
                if(n==0){
		var myurl='changepassword.php';
		$.ajax({
		type: "POST",
		url: myurl,
		data:
 {password:password1,email:email1,newpassword:newpassword1},
		dataType: "json",
		success: function(data){
		$("#changePassword")[0].reset();
                if(data.error == 0){
                    $('#updatesuccess').css('display', 'block');
$('#updatefail').css('display', 'none');
$('#oldpasswordwrong').css('display', 'none');
$('#retypepassword').css('display', 'none');
				}
                else if(data.error == 1) {
                   
                    $('#updatesuccess').css('display', 'none');
$('#updatefail').css('display', 'none');
$('#oldpasswordwrong').css('display', 'block');
$('#retypepassword').css('display', 'none');
				}
                else {
                    $('#updatesuccess').css('display', 'none');
$('#updatefail').css('display', 'block');
$('#oldpasswordwrong').css('display', 'none');
$('#retypepassword').css('display', 'none');
				}
              },
              error:function(data){
                 $('#updatesuccess').css('display', 'none');
$('#updatefail').css('display', 'block');
$('#oldpasswordwrong').css('display', 'none');
$('#retypepassword').css('display', 'none');
              }
		});
}
else{
$('#updatesuccess').css('display', 'none');
$('#updatefail').css('display', 'none');
$('#oldpasswordwrong').css('display', 'none');
$('#retypepassword').css('display', 'block');
}

		
};
</script>

<html>