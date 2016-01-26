<!DOCTYPE html>
<html lang="en">
<head>
	<title>Progress U0000pdate</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale =1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   

</head>

<body style="background:rgb(179, 175, 217)">

 
<div class="container"  >

 
<div class="page-header" style="font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" > 
	  <h1 >Project Progress</h1>  

</div> 
<div class="row">
<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:30px;padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" ><h3><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;&nbsp;Project Name</h3></div>

	<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:30px;padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" ><h3><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;&nbsp;Customer Name</h3></div>

	<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:30px;padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white" ><h3><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;&nbsp;Vendor Name</h3></div>

	<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:30px; padding-left:30px;font-family:'Trebuchet MS', Helvetica, sans-serif; color:white"  ><h3><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;&nbsp;Project Report</h3></div>


 

</body> 
</html>



<?php

	 
	 
	for($i=0; $i<sizeof($tab); $i++)
	{
		echo '<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white "  >' .$tab[$i]['Proj_Name'].'
	</div>';
		echo '<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white"  >'.$tab[$i]['Cust_Name'].'
	</div>'; 
		echo '<div class="col-sm-3 well well-sm" style="background:rgba(153,134,235,.4); border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white" >'.$tab[$i]['Vend_Name'].'
	</div>';
		echo '<div class="col-sm-3 well well-sm " style="background:rgba(153,134,235,.4); border-radius:5px;padding-left:30px;font-family:"Trebuchet MS", Helvetica, sans-serif; color:white">' .$tab[$i]['Status'].' </div>';
	}

?>

