<?php
session_start();
if(!isset($_SESSION['id']))
{
    header('location:index.html');
}
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$dept=$_SESSION['dept'];
$designation=$_SESSION['designation'];
$status=$_SESSION['status'];
$mongoid=$_SESSION['OID'];
?>


<!DOCTYPE html>
<html><head lang="en">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/css.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/print.css" media="print">
   <link href="css/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />
    <style>
       
        .myinput{
            width:100%;
        }
        #loading {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,.5);
    -webkit-transition: all .5s ease;
    z-index: 1000;
    display:none;
}

textarea {resize: none}
@media print {
  .visible-print  { display: inherit !important; }
  .hidden-print   { display: none !important; }
}

    </style>

<script src="js/angular.js"></script>
<script src="js/jquery.js"></script>
  <script src="http://monospaced.github.io/angular-elastic/elastic.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.1/angular-sanitize.js"></script>
<script src="js/bootstrap.js"></script>

<script>



var app = angular.module('myApp', ['monospaced.elastic','ngSanitize']);
app. directive('contenteditable', ['$sce', function($sce) {
    return {
      restrict: 'A', // only activate on element attribute
      require: '?ngModel', // get a hold of NgModelController
      link: function(scope, element, attrs, ngModel) {
        if (!ngModel) return; // do nothing if no ng-model

        // Specify how UI should be updated
        ngModel.$render = function() {
          element.html($sce.getTrustedHtml(ngModel.$viewValue || ''));
        };

        // Listen for change events to enable binding
        element.on('blur keyup change', function() {
          scope.$evalAsync(read);
        });
        read(); // initialize

        // Write data to the model
        function read() {
          var html = element.html();
          // When we clear the content editable the browser leaves a <br> behind
          // If strip-br attribute is provided then we strip this out
          if ( attrs.stripBr && html == '<br>' ) {
            html = '';
          }
          ngModel.$setViewValue(html);
        }
      }
    };
  }]);
app.controller('myCtrl', function ($scope,$http) {
$scope.Math = window.Math;
     var uid='<?php echo $mongoid; ?>';
     if(uid){
     var myurl='https://api.mongolab.com/api/1/databases/fpa/collections/fpa/'+uid+'?apiKey=_e_-nVcEnScPNXtJaUbvEfOvjVYLoG1h';
    $http.get(myurl)
    .success(function(response) {
       
         $scope.fpaupdate= response;
         var stype='<?php echo $designation; ?>';
    
     if(stype=='Professor'){
    $scope.fpaupdate.value1 = 35;
     $scope.fpaupdate.value2 = 10;
     $scope.fpaupdate.value3 = 25;
     $scope.fpaupdate.value4 = 15;
     $scope.fpaupdate.value5 = 15;
     $scope.fpaupdate.value6 = 350;
     $scope.fpaupdate.value7 = 150;
     $scope.fpaupdate.value8 = 250;
     $scope.fpaupdate.value9 = 60;
     $scope.fpaupdate.value10 = 60;
    }
    else if(stype=='Associate Professor'){
     $scope.fpaupdate.value1 = 35;
     $scope.fpaupdate.value2 = 10;
     $scope.fpaupdate.value3 = 25;
     $scope.fpaupdate.value4 = 15;
     $scope.fpaupdate.value5 = 15;
     $scope.fpaupdate.value6 = 300;
     $scope.fpaupdate.value7 = 150;
     $scope.fpaupdate.value8 = 300;
     $scope.fpaupdate.value9 = 60;
     $scope.fpaupdate.value10 = 60;
    }
    else if(stype=='Assistant Professor')
    {
     $scope.fpaupdate.value1 = 40;
     $scope.fpaupdate.value2 = 15;
     $scope.fpaupdate.value3 = 15;
     $scope.fpaupdate.value4 = 15;
     $scope.fpaupdate.value5 = 15;
     $scope.fpaupdate.value6 = 350;
     $scope.fpaupdate.value7 = 150;
     $scope.fpaupdate.value8 = 250;
     $scope.fpaupdate.value9 = 60;
     $scope.fpaupdate.value10 = 60;
   
    }
        
   
});
  }
  else{
    $scope.fpaupdate= {};
    }
$scope.$watchGroup(['fpaupdate.partA1S','fpaupdate.partA2S','fpaupdate.partA3S','fpaupdate.partA4S','fpaupdate.partA5S','fpaupdate.partA6S','fpaupdate.partA7S','fpaupdate.partA8S','fpaupdate.partA9S','fpaupdate.partA10S','fpaupdate.partA11S','fpaupdate.partA12S','fpaupdate.partA13S','fpaupdate.partA14S'], function() {
       
$scope.fpaupdate.partASubTotal=$scope.fpaupdate.partA1S+$scope.fpaupdate.partA2S+$scope.fpaupdate.partA3S+$scope.fpaupdate.partA4S+$scope.fpaupdate.partA5S+$scope.fpaupdate.partA6S+$scope.fpaupdate.partA7S+$scope.fpaupdate.partA8S+$scope.fpaupdate.partA9S+$scope.fpaupdate.partA10S+$scope.fpaupdate.partA11S+$scope.fpaupdate.partA12S+$scope.fpaupdate.partA13S+$scope.fpaupdate.partA14S;

   }); $scope.$watchGroup(['fpaupdate.partB1S','fpaupdate.partB2S','fpaupdate.partB3S','fpaupdate.partB4S','fpaupdate.partB5S','fpaupdate.partB6S','fpaupdate.partB7S','fpaupdate.partB8S','fpaupdate.partB9S'], function() {
    
$scope.fpaupdate.partBSubTotal=$scope.fpaupdate.partB1S+$scope.fpaupdate.partB2S+$scope.fpaupdate.partB3S+$scope.fpaupdate.partB4S+$scope.fpaupdate.partB5S+$scope.fpaupdate.partB6S+$scope.fpaupdate.partB7S+$scope.fpaupdate.partB8S+$scope.fpaupdate.partB9S;

   });
$scope.$watchGroup(['fpaupdate.partC1S','fpaupdate.partC2S','fpaupdate.partC3S','fpaupdate.partC4S','fpaupdate.partC5S','fpaupdate.partC6S','fpaupdate.partC7S','fpaupdate.partC8S','fpaupdate.partC9S','fpaupdate.partC10S'], function() {
      
$scope.fpaupdate.partCSubTotal=$scope.fpaupdate.partC1S+$scope.fpaupdate.partC2S+$scope.fpaupdate.partC3S+$scope.fpaupdate.partC4S+$scope.fpaupdate.partC5S+$scope.fpaupdate.partC6S+$scope.fpaupdate.partC7S+$scope.fpaupdate.partC8S+$scope.fpaupdate.partC9S+$scope.fpaupdate.partC10S;

   });
$scope.$watchGroup(['fpaupdate.partC11S','fpaupdate.partC12S','fpaupdate.partC13S','fpaupdate.partC14S','fpaupdate.partC15S','fpaupdate.partC16S','fpaupdate.partC17S','fpaupdate.partC18S','fpaupdate.partC19S'], function() {
   
$scope.fpaupdate.partDSubTotal=Number($scope.fpaupdate.partC11S)+Number($scope.fpaupdate.partC12S)+Number($scope.fpaupdate.partC13S)+Number($scope.fpaupdate.partC14S)+Number($scope.fpaupdate.partC15S)+Number($scope.fpaupdate.partC16S)+Number($scope.fpaupdate.partC17S)+Number($scope.fpaupdate.partC18S)+Number($scope.fpaupdate.partC19S);


   });
 $scope.$watchGroup(['fpaupdate.partE2S','fpaupdate.partE18S'], function() {
       
$scope.fpaupdate.partESubTotal=$scope.fpaupdate.partE2S+$scope.fpaupdate.partE18S;

   });
$scope.$watchGroup(['fpaupdate.partASubTotal'], function() {
       
if($scope.fpaupdate.partASubTotal>=$scope.fpaupdate.value6){
$scope.fpaupdate.instructionRelatedScoreCacl=$scope.fpaupdate.value1;
}
else{
$scope.fpaupdate.instructionRelatedScoreCacl=$scope.fpaupdate.value1*($scope.fpaupdate.partASubTotal/$scope.fpaupdate.value6);
}
   });
$scope.$watchGroup(['fpaupdate.partBSubTotal'], function() {
       
if($scope.fpaupdate.partBSubTotal>=$scope.fpaupdate.value7){
$scope.fpaupdate.departmentalRelatedScoreCacl=$scope.fpaupdate.value2;
}
else{
$scope.fpaupdate.departmentalRelatedScoreCacl=$scope.fpaupdate.value2*($scope.fpaupdate.partBSubTotal/$scope.fpaupdate.value7);
}
   });
$scope.$watchGroup(['fpaupdate.partCSubTotal'], function() {
       
if($scope.fpaupdate.partCSubTotal>=$scope.fpaupdate.value8){
$scope.fpaupdate.consultanyRelatedScoreCacl=$scope.fpaupdate.value3;
}
else{
$scope.fpaupdate.consultanyRelatedScoreCacl=$scope.fpaupdate.value3*($scope.fpaupdate.partCSubTotal/$scope.fpaupdate.value8);
}
   });
$scope.$watchGroup(['fpaupdate.partDSubTotal'], function() {
       
if($scope.fpaupdate.partDSubTotal>=$scope.fpaupdate.value9){
$scope.fpaupdate.publicationRelatedScoreCacl=$scope.fpaupdate.value4;
}
else{
$scope.fpaupdate.publicationRelatedScoreCacl=$scope.fpaupdate.value4*($scope.fpaupdate.partDSubTotal/$scope.fpaupdate.value9);
}
   });
$scope.$watchGroup(['fpaupdate.partESubTotal'], function() {
       
if($scope.fpaupdate.partESubTotal>=$scope.fpaupdate.value10){
$scope.fpaupdate.studentFeedbackRelatedScoreCacl=$scope.fpaupdate.value5;
}
else{
$scope.fpaupdate.studentFeedbackRelatedScoreCacl=$scope.fpaupdate.value5*($scope.fpaupdate.partESubTotal/$scope.fpaupdate.value10);
}
   });
 
 $scope.$watchGroup(['fpaupdate.instructionRelatedScoreCacl','fpaupdate.departmentalRelatedScoreCacl','fpaupdate.consultanyRelatedScoreCacl','fpaupdate.publicationRelatedScoreCacl','fpaupdate.studentFeedbackRelatedScoreCacl'], function() {
    
$scope.fpaupdate.totalScoreCacl=$scope.fpaupdate.instructionRelatedScoreCacl+$scope.fpaupdate.departmentalRelatedScoreCacl+$scope.fpaupdate.consultanyRelatedScoreCacl+$scope.fpaupdate.publicationRelatedScoreCacl+$scope.fpaupdate.studentFeedbackRelatedScoreCacl;

   });
    
});

</script>


</head>

<body ng-app="myApp" ng-controller="myCtrl" style="width:1007px;height:7583px;   ">

<?php 
if($status==0){
include('header.php');
include('main.php');
}
else if($status==1){
include('header1.php');
include('main1.php');
}
 ?>
 