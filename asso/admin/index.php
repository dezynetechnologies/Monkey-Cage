<?php

session_start();

if (!isset($_SESSION['user_email'])) {
  
  echo "<script>window.open('login.php?not_admin=You are not an admin !','_self')</script>";
}

else{


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Monkey_Cage- Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="admin.css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

    <script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = " ";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
	</head>



	<body>
		<div class="container">
   
   
  <div class="jumbotron">
      
    <h1>Monkey-Cage</h1> 
    <a href="logout.php"  style="align-content: right; padding-left: 900px; padding-bottom: 300px " >  <button  type="button" class="btn btn-danger">Logout </button> </a>
    <p>Admin Panel</p> 
  </div>
  <div class="panel panel-default">
  <div class="panel-body">
  	

  <div class="panel-body">	

  	<form  name="myform" method="post"  action="" enctype="multipart/form-data" >
<h2  style="color:red;" >Timings</h2>
  		<div class="col-lg-12">
          <div class="table-responsive">
          	 <table class="table">
  			<tr>
		<th>SAT</th>
		<th>SUN</th>
		<th>MON</th>
		<th>TUE</th>
		<th>WED</th>
		<th>THU</th>
		<th>FRI</th>

	</tr>


	<tr>
	<td>
<label>Von: </label>
<select name="SATo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="SATc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="satclo">Closed<br></td>



	<td>
    <label>Von: </label>
<select name="SUNo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="SUNc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="sunclo">Closed<br></td>
	<td>
    <label>Von: </label>

<select name="MONo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="MONc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="monclo">Closed<br></td>
	<td>
    <label>Von: </label>

<select name="TUEo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="TUEc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="tueclo">Closed<br></td></input></td>
	<td>
    <label>Von: </label>

<select name="WEDo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="WEDc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="wedclo">Closed<br></td>
	<td>
    <label>Von: </label>

<select name="THUo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="THUc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="thuclo">Closed<br></td>
	<td>
    <label>Von: </label>

<select name="FRIo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="FRIc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="friclo">Closed<br></td>
   </tr>
  



</table>
</div>
  		</div>

<h2  style="color:red;" >Dienstleistungen</h2>
  		<div class="col-lg-12">
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_service" ></textarea></td>
          	 		

          	 	</tr>

          	 	<tr>
          	 		
          	 		<th>Content</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="25" cols="50" style="margin: 0px; height: 546px; width: 381px;" name="content_service"></textarea></td>

          	 	</tr>




          	 	</table>

          	 	</div>



  			</div>
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Feature1</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_feature1"></textarea></td>
          	 		

          	 	</tr>

          	 	<tr>
          	 		
          	 		<th>Content1</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="4" cols="50"  name="title_content1"></textarea></td>

          	 	</tr>
          	 		<tr>
          	 		<th>Feature2</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_feature2"></textarea></td>
          	 		

          	 	</tr>

          	 	<tr>
          	 		
          	 		<th>Content2</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="4" cols="50"  name="title_content2"></textarea></td>

          	 	</tr>
          	 		<tr>
          	 		<th>Feature3</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_feature3"></textarea></td>
          	 		

          	 	</tr>

          	 	<tr>
          	 		
          	 		<th>Content3</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="4" cols="50"  name="title_content3"></textarea></td>

          	 	</tr>

          	 	 	 		



  			</div>
  			</div>

             <div class="col-lg-12" > 
  			<div class="table-responsive">
          	 <table class="table">
          	 			<tr>
          	 			<input type="file" name="fileToUpload1" id="fileToUpload">
          	 			<input type="file" name="fileToUpload2" id="fileToUpload">
          	 		</tr>

          	 		      	 	
          	 		
          	 			
   
          	 		</div>
          	 	</table>
          	 </div>

          	 	</div>



<h2  style="color:red;" >Unsere Angebote</h2>
<div class="col-lg-12">
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title1</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50"  name="title_offer1"></textarea></td>
          	 		
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Content1</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 	
          	 		<td><textarea rows="4" cols="50" name="content_offer1" ></textarea></td>
          	 	
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Image1</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><input type="file" name="fileToUpload_offer1" id="fileToUpload"></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
                  <div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title2</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_offer2"></textarea></td>
          	 		
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Content2</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 	
          	 		<td><textarea rows="4" cols="50" name="content_offer2"></textarea></td>
          	 	
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Image2</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><input type="file" name="fileToUpload_offer2" id="fileToUpload"></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
      </div>

      <div class="col-lg-12">
  			<div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title3</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_offer3"></textarea></td>
          	 		
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Content3</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 	
          	 		<td><textarea rows="4" cols="50" name="content_offer3"></textarea></td>
          	 	
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Image3</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><input type="file" name="fileToUpload_offer3" id="fileToUpload"></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
                  <div class="col-lg-6">
  				   <div class="table-responsive">
          	 <table class="table">
          	 	<tr>
          	 		<th>Title4</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 		<td><textarea rows="1" cols="50" name="title_offer4"></textarea></td>
          	 		
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Content4</th>
          	 		
          	 	</tr>
          	 	<tr>
          	 	
          	 		<td><textarea rows="4" cols="50"></textarea></td>
          	 	
          	 	</tr>
          	 		<tr>
          	 		
          	 		<th>Image4</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><input type="file" name="fileToUpload_offer4" id="fileToUpload"></td>
          	 	</tr>
          	 </table>
          	</div>
          </div>
      </div>
  		

<h2  style="color:red;" >Preis</h2>

<div class="col-lg-3">

<h2 class="top_head" >Erwachsene</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>


	<tr>
	<td> <input type="text" id="numb" name="A1day"  placeholder="Eingeben Preis"  value="xyz"> <p id="demo"></p> </input> </td> 

   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="text" name="A1month" id="numb"  placeholder="Eingeben Preis" > <p id="demo"> </input></td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="text" name="A3month"  placeholder="Eingeben Preis" ></input><span class="error" style ="color:red;">* <?php echo $A3montherr ;?></span></td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="text" name="A6month"  placeholder="Eingeben Preis" ></input> <span class="error" style ="color:red;">* <?php echo $A6montherr ;?></span> </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="text" name="Ayear"  placeholder="Eingeben Preis" ></input>   <span class="error" style ="color:red;">* <?php echo $Ayearerr ;?></span></td>
   </tr>

</table>	
	
</div>
</div>
<div class="col-lg-3">
	<h2 class="top_head" >Schüler</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>


	<tr>
	<td> <input type="text" name="S1day"  placeholder="Eingeben Preis" ></input>  <span class="error" style ="color:red;">* <?php echo $S1dayerr ;?></span> </td>
   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="text" name="S1month"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="text" name="S3month"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="text" name="S6month"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="text" name="Syear"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

</table>	
	
</div>
</div>
<div class="col-lg-3">
		<h2 class="top_head" >Kinder</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>


	<tr>
	<td> <input type="text" name="K1day"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="text" name="K1month"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="text" name="K3month"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="text" name="K6month"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="text" name="Kyear"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

</table>	
	
</div>
</div>
<div class="col-lg-3">
	
		<h2 class="top_head" >Familienkarte</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>

	<tr>
	<td> <input type="text" name="F1day"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

</table>	
	
<p><br></p>

<h2 class="top_head" >Kleinkinder</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>1 Day :</th>
	</tr>

	<tr>
	<td> <input type="text" name="KK1day"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

	

</table>	
	
</div>
</div>
</div>

<div class="col-lg-12">
	<h2 style="color:red;">Leihequipment</h2>
</div>

<div class="col-lg-6">


	
		<h2 class="top_head"  >Erwachsene</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>Leihschuhe</th>
	</tr>

	<tr>
	<td> <input type="text" name="EEL"  placeholder="Eingeben Preis" ></input> </td>
   </tr>
<tr>
		<th>Chalkbags</th>
	</tr>

	<tr>
	<td> <input type="text" name="EEC"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>Bürsten</th>
	</tr>

	<tr>
	<td> <input type="text" name="EEB"  placeholder="Eingeben Preis" ></input> </td>
   </tr>


	

</table>	
	
</div>
</div>

<div class="col-lg-6">

	
		<h2 class="top_head" >Kinder</h2>

<p><br></p>

<div class="table-responsive" >
	 <table class="table">

	<tr>
		<th>Leihschuhe</th>
	</tr>

	<tr>
	<td> <input type="text" name="EKL"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

<tr>
		<th>Chalkbags</th>
	</tr>

	<tr>
	<td> <input type="text" name="EKC"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

   <tr>
		<th>Bürsten</th>
	</tr>

	<tr>
	<td> <input type="text" name="EKB"  placeholder="Eingeben Preis" ></input> </td>
   </tr>

	

</table>	
	
</div>
</div>

</div>
<div class="col-lg-12" style="text-align: center;">
<button name="update"  type="button" onclick="myFunction()" value="Einreichen" class="btn btn-danger">Submit </button>
<button name="update"  type="submit" value="Einreichen" class="btn btn-danger">Submit </button>


 <?php
$A1dayerr =  $A1montherr = $A3montherr = $A6montherr = $Ayearerr = " ";
$S1dayerr = $S1montherr= $S3montherr= $S6montherr= $Syearerr=" ";
$K1dayerr= $K1montherr = $K3montherr= $K6montherr= $Kyearerr=" ";
$F1dayerr =" ";
$KK1dayerr = " ";
$EELerr = $EECerr = $EEBerr=" ";
$EKLerr = $EKCerr = $EKBerr = " ";

if (isset($_POST['update'])) {
  


  $A1day = $_POST['A1day'];  
    echo $A1day;
  

  $A1month = $_POST['A1month'];
   if (!preg_match('/^[0-9 ].*$/', $A1month)) {

$A1montherr = "error";

    
  }
  $A3month = $_POST['A3month'];
   if (!preg_match('/^[0-9 ].*$/', $A3month)) {

$A3montherr = "error";

    
  }
  $A6month = $_POST['A6month'];
   if (!preg_match('/^[0-9 ].*$/', $A6month)) {

$A6montherr = "error";

    
  }
  $Ayear = $_POST['Ayear'];
   if (!preg_match('/^[0-9 ].*$/', $Ayear)) {

$Ayearerr = "error";

    
  }

  $S1day = $_POST['S1day'];
  if (!preg_match('/^[0-9 ].*$/', $S1day)) {

$S1dayerr = "error";

    
  }
  $S1month = $_POST['S1month'];
    if (!preg_match('/^[0-9 ].*$/', $S1month)) {

$S1montherr = "error";

    
  }

  $S3month = $_POST['S3month'];
    if (!preg_match('/^[0-9 ].*$/', $S3month)) {

$S3montherr = "error";

    
  }
  $S6month = $_POST['S6month'];
    if (!preg_match('/^[0-9 ].*$/', $S6month)) {

$S6montherr = "error";

    
  }
  $Syear = $_POST['Syear'];
    if (!preg_match('/^[0-9 ].*$/', $Syear)) {

$Syearerr = "error";

    
  }

  $K1day = $_POST['K1day'];
    if (!preg_match('/^[0-9 ].*$/', $K1day)) {

$K1dayerr = "error";

    
  }
  $K1month = $_POST['K1month'];
    if (!preg_match('/^[0-9].*$/', $K1month)) {

$K1montherr = "error";

    
  }
  $K3month = $_POST['K3month'];
    if (!preg_match('/^[0-9].*$/', $K3month)) {

$K3montherr = "error";

    
  }
  $K6month = $_POST['K6month'];
    if (!preg_match('/^[0-9].*$/', $A1day)) {

$K6montherr = "error";

    
  }
  $Kyear = $_POST['Kyear']; 
  if (!preg_match('/^[0-9].*$/', $Kyear)) {

$Kyearerr = "error";

    
  }

  $F1day = $_POST['F1day'];
  if (!preg_match('/^[0-9].*$/', $F1day )) {

$F1dayerr = "error";

    
  }
  $KK1day = $_POST['KK1day'];
  if (!preg_match('/^[0-9].*$/', $KK1day )) {

$KK1dayerr = "error";

    
  }

  $EEL = $_POST['EEL'];
  if (!preg_match('/^[0-9].*$/', $EEL)) {

$EELerr = "error";
   
  }
  $EEC = $_POST['EEC'];
  if (!preg_match('/^[0-9].*$/', $EEC)) {

$EECerr = "error";

    
  }
  $EEB = $_POST['EEB'];
  if (!preg_match('/^[0-9].*$/', $EEB)) {

$EEBerr = "error";

    
  }

  $EKL = $_POST['EKL'];
  if (!preg_match('/^[0-9 ].*$/', $EKL)) {

$EKLerr = "error";

    
  }
  $EKC = $_POST['EKC'];
  if (!preg_match('/^[0-9].*$/', $EKC)) {

$EKCerr = "error";

    
  }
  $EKB = $_POST['EKB'];
  if (!preg_match('/^[0-9].*$/', $EKB)) {

$EKBerr = "error";

    
  }
}


?>







</div>

</form>
</div>
  
</div>
  
</div>
</div>





</body>
</html>

<?php

}


?>
