<div class="navbar" style="background-color: #EBEBEB;" id="navdiv">

                <ul class="nav navbar-nav"style="padding-left: 30px;font-size: 20px;" >
                    
                    <li class="heading" >ANNUAL  FACULTY  PERFORMANCE  APPRAISAL</li> 
                      

<li style="float: right;list-style-type: none;" ><a href="logout.php" class="btn btn-info" style="height: 45px;display: none;" id="logout" >LOGOUT</a></li>

                </ul> 
                
</div>
<button class="btn btn-info btn-lg" onclick="myFunction()" style="float:right">Print Form</button>
<script>
function myFunction() {
    window.print();
}
</script>
<script type="text/javascript">
$( document ).ready(function() {
    
 $("#fpaForm :input").prop("disabled", true);
  
    
});

$(document).ready(function () {
                $(document).on('mouseenter', '#navdiv', function () {
                    $('#logout').css('display', 'block');
                }).on('mouseleave', '#navdiv', function () {
                   $('#logout').css('display', 'none');
                });
            });

</script>
