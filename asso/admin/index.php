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

    
<!--<script>
function validateForm() {
    var a1d = document.forms["myForm"]["A1day"].value;
    var a1m= document.forms["myForm"]["A1month"].value;
    var a3m= document.forms["myForm"]["A3month"].value;
    var a6m= document.forms["myForm"]["A6month"].value;
    var s1d= document.forms["myForm"]["S1day"].value;
    var s1m= document.forms["myForm"]["S1month"].value;
    var s3m= document.forms["myForm"]["S3month"].value;
    var s6m= document.forms["myForm"]["S6month"].value;
    var sy= document.forms["myForm"]["Syear"].value;
    var k1d= document.forms["myForm"]["K1day"].value;
    var k1m= document.forms["myForm"]["K1month"].value;
    var k3m= document.forms["myForm"]["K3month"].value;
    var k6m= document.forms["myForm"]["K6month"].value;
    var ky= document.forms["myForm"]["Kyear"].value;
    var f1d= document.forms["myForm"]["F1day"].value;
    var kk1d= document.forms["myForm"]["KK1day"].value;



    if (a1d == null || a1d == "" || a1m == null || a1m == "" ||  a3m == null || a3m == "" ||  a6m == null ||a6m == "" ||  ay == null ||ay == ""
    ||  s1d == null || s1d == "" || s1m == null || s1m == "" ||  s3m == null || s3m == "" ||  s6m == null ||s6m == "" ||  sy == null ||sy == ""
    ||  k1d == null || k1d == "" || k1m == null || k1m == "" ||  k3m == null || k3m == "" ||  k6m == null ||k6m == "" ||  ky == null ||ky == ""
    ||  f1d == null || f1d == "" || kk1d == null || kk1d == "") {

        text="Only Integers must be filled";

        document.getElementById("demo1").innerHTML = text;       
        document.getElementById("demo2").innerHTML = text;
        document.getElementById("demo3").innerHTML = text;
        document.getElementById("demo4").innerHTML = text;
        document.getElementById("demo5").innerHTML = text;
        document.getElementById("demo6").innerHTML = text;
        document.getElementById("demo7").innerHTML = text;
        document.getElementById("demo8").innerHTML = text;
        document.getElementById("demo9").innerHTML = text;
        document.getElementById("demo10").innerHTML = text;
        document.getElementById("demo11").innerHTML = text;
        document.getElementById("demo12").innerHTML = text;
        document.getElementById("demo13").innerHTML = text;
        document.getElementById("demo14").innerHTML = text;
        document.getElementById("demo15").innerHTML = text;
        document.getElementById("demo16").innerHTML = text;
        document.getElementById("demo17").innerHTML = text;




return false;
    }

}
</script>-->
<script> 
var maxAmount = 350;
function textCounter(textField, showCountField) {
    if (textField.value.length > maxAmount) {
        textField.value = textField.value.substring(0, maxAmount);
  } else { 
        showCountField.value = maxAmount - textField.value.length;
  }
}
</script>

<script> 
var maxAmount1 = 25;
function textCounter1(x, y) {
    if (x.value.length > maxAmount1) {
        x.value = x.value.substring(0, maxAmount1);
  } else { 
        y.value = maxAmount1 - x.value.length;
  }
}
</script>

<script> 
var maxAmount2 = 150;
function textCounter2(x, y) {
    if (x.value.length > maxAmount2) {
        x.value = x.value.substring(0, maxAmount2);
  } else { 
        y.value = maxAmount2 - x.value.length;
  }
}
</script>




<script language="javascript">
    function enableDisable(bEnable, textBoxID, textBoxID1)
    {
         document.getElementById(textBoxID).disabled = bEnable
         document.getElementById(textBoxID1).disabled = bEnable
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

  	<form  name="myForm"   action=""   method="post" >
<h2  style="color:red;" >Timings</h2>
  		<div class="col-lg-12">
          <div class="table-responsive">
          	 <table class="table">
  			<tr>
		<th>SAMSTAG</th>
		<th>SONNTAG</th>
		<th>MONTAG</th>
		<th>DIENSTAG</th>
		<th>MITTWOCH</th>
		<th>DONNERSTAG</th>
		<th>DONNERSTAG</th>

	</tr>


	<tr>
	<td>
<label>Von: </label>
<select name="SATo" id="sato" >
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="SATc" id="satc" >
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="satclo" id="checkBox" onclick="enableDisable(this.checked, 'sato','satc')">Geschlossen<br></td>



	<td>
    <label>Von: </label>
<select name="SUNo" id="suno">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="SUNc" id="sunc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="sunclo" id="checkBox" onclick="enableDisable(this.checked, 'suno','sunc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="MONo" id="mono">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="MONc" id="monc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="monclo" id="checkBox" onclick="enableDisable(this.checked, 'mono','monc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="TUEo" id="tueo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="TUEc" id="tuec">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="tueclo" id="checkBox" onclick="enableDisable(this.checked, 'tueo','tuec')">Geschlossen<br></td></input></td>
	<td>
    <label>Von: </label>

<select name="WEDo" id="wedo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
} 
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="WEDc" id="wedc">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="wedclo" id="checkBox" onclick="enableDisable(this.checked, 'wedo','wedc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="THUo" id="thuo">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="THUc" id="thuc" >
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="thuclo" id="checkBox" onclick="enableDisable(this.checked, 'thuo','thuc')">Geschlossen<br></td>
	<td>
    <label>Von: </label>

<select name="FRIo" id="frio">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select>
<br>-<br>
<label>Nach: </label>
<select name="FRIc" id="fric">
		<?php
		for ($i=0; $i < 24 ; $i++) { 
			
		
  echo "<option>$i : 00  </option> ";
}
  ?> 
</select><br><br><input type="checkbox" name="friclo" id="checkBox" onclick="enableDisable(this.checked, 'frio','fric')">Geschlossen<br></td>
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
          	 		<td><textarea rows="1" cols="50" name="ts"  onKeyDown="textCounter1(this.form.ts,this.form.countDisplayts);" onKeyUp="textCounter1(this.form.ts,this.form.countDisplayts);"></textarea>
          	 	 <br>
                 <input readonly type="text" name="countDisplayts" size="3" maxlength="3" value="25"> Characters Remaining</td>	
              
          	 	</tr>

          	 	<tr>
          	 		
          	 		<th>Content</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="25" cols="50" style="margin: 0px; height: 546px; width: 381px;" name="cs" onKeyDown="textCounter(this.form.cs,this.form.countDisplaycs);" onKeyUp="textCounter(this.form.cs,this.form.countDisplaycs);"></textarea>
                   <br>
                   <input readonly type="text" name="countDisplaycs" size="3" maxlength="3" value="350"> Characters Remaining</td> 

                </td>

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
                <td><textarea rows="1" cols="50" name="tf1"  onKeyDown="textCounter1(this.form.tf1,this.form.countDisplaytf1);" onKeyUp="textCounter1(this.form.tf1,this.form.countDisplaytf1);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplaytf1" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
          	 	</tr>
          	 		
          	 		<th>Content1</th>
          	 	</tr>
          	 	<tr>
          	 		
          	 		<td><textarea rows="4" cols="50"  name="tc1" onKeyDown="textCounter2(this.form.tc1,this.form.countDisplaytc1);" onKeyUp="textCounter2(this.form.tc1,this.form.countDisplaytc1);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplaytc1" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                </td>

          	 	</tr>
          	 		<tr>
          	 		<th>Feature2</th>
          	 		
          	 	</tr>
          	  <tr>
                <td><textarea rows="1" cols="50" name="tf2"  onKeyDown="textCounter1(this.form.tf2,this.form.countDisplaytf2);" onKeyUp="textCounter1(this.form.tf2,this.form.countDisplaytf2);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplaytf2" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
              </tr>

          	 	<tr>
          	 		
          	 		<th>Content2</th>
          	 	</tr>
          	 <tr>
                
                <td><textarea rows="4" cols="50"  name="tc2" onKeyDown="textCounter2(this.form.tc2,this.form.countDisplaytc2);" onKeyUp="textCounter2(this.form.tc2,this.form.countDisplaytc2);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplaytc2" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                </td>

              </tr>
          	 		<tr>
          	 		<th>Feature3</th>
          	 		
          	 	</tr>
          	 	 <tr>
                <td><textarea rows="1" cols="50" name="tf3"  onKeyDown="textCounter1(this.form.tf3,this.form.countDisplaytf1);" onKeyUp="textCounter1(this.form.tf3,this.form.countDisplaytf3);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplaytf3" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
              </tr>

          	 	<tr>
          	 		
          	 		<th>Content3</th>
          	 	</tr>
          	 	<tr>
                
                <td><textarea rows="4" cols="50"  name="tc3" onKeyDown="textCounter2(this.form.tc3,this.form.countDisplaytc3);" onKeyUp="textCounter2(this.form.tc3,this.form.countDisplaytc3);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplaytc3" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                </td>

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
                <td><textarea rows="1" cols="50" name="to1"  onKeyDown="textCounter1(this.form.to1,this.form.countDisplayto1);" onKeyUp="textCounter1(this.form.to1,this.form.countDisplayto1);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplayto1" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content1</th>
          	 		
          	 	</tr>
          	 <tr>
                
                <td><textarea rows="4" cols="50"  name="co1" onKeyDown="textCounter2(this.form.co1,this.form.countDisplayco1);" onKeyUp="textCounter2(this.form.co1,this.form.countDisplayco1);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplayco1" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                

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
                <td><textarea rows="1" cols="50" name="to2"  onKeyDown="textCounter1(this.form.to2,this.form.countDisplayto2);" onKeyUp="textCounter1(this.form.to2,this.form.countDisplayto2);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplayto2" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content2</th>
          	 		
          	 	</tr>
          	  <tr>
                
                <td><textarea rows="4" cols="50"  name="co2" onKeyDown="textCounter2(this.form.co2,this.form.countDisplayco2);" onKeyUp="textCounter2(this.form.co2,this.form.countDisplayco2);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplayco2" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                

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
                <td><textarea rows="1" cols="50" name="to3"  onKeyDown="textCounter1(this.form.to3,this.form.countDisplayto3);" onKeyUp="textCounter1(this.form.to3,this.form.countDisplayto3);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplayto3" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content3</th>
          	 		
          	 	</tr>
          	 	 <tr>
                
                <td><textarea rows="4" cols="50"  name="co3" onKeyDown="textCounter2(this.form.co3,this.form.countDisplayco3);" onKeyUp="textCounter2(this.form.co3,this.form.countDisplayco3);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplayco3" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                

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
                <td><textarea rows="1" cols="50" name="to4"  onKeyDown="textCounter1(this.form.to4,this.form.countDisplayto4);" onKeyUp="textCounter1(this.form.to4,this.form.countDisplayto4);"></textarea>
               <br>
                 <input readonly type="text" name="countDisplayto4" size="3" maxlength="3" value="25"> Characters Remaining</td> 
              
            
              </tr>
          	 		<tr>
          	 		
          	 		<th>Content4</th>
          	 		
          	 	</tr>
          	 	 <tr>
                
                <td><textarea rows="4" cols="50"  name="co4" onKeyDown="textCounter2(this.form.co4,this.form.countDisplayco4);" onKeyUp="textCounter2(this.form.co4,this.form.countDisplayco4);"></textarea>

                <br>
                 <input readonly type="text" name="countDisplayco4" size="3" maxlength="3" value="150"> Characters Remaining</td> 

                

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
	<td><input type="number" step=0.01 name="A1day" placeholder="Eingeben Preis"> </input> <p id="demo1" ></p> </td> 

   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="A1month" placeholder="Eingeben Preis" >  </input><p id="demo2" ></p></td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="A3month"  placeholder="Eingeben Preis" ></input><p id="demo3" ></p></td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="A6month"  placeholder="Eingeben Preis" ></input><p id="demo4" ></p>  </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="Ayear"  placeholder="Eingeben Preis" ></input><p id="demo5" ></p>  </td>
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
	<td> <input type="number" step=0.01 name="S1day"  placeholder="Eingeben Preis" ></input><p id="demo6" ></p>  </td>
   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S1month"  placeholder="Eingeben Preis" ></input><p id="demo7" ></p> </td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S3month"  placeholder="Eingeben Preis" ></input> <p id="demo8" ></p></td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="S6month"  placeholder="Eingeben Preis" ></input> <p id="demo9" ></p></td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="Syear"  placeholder="Eingeben Preis" ></input><p id="demo10" ></p> </td>
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
	<td> <input type="number" step=0.01 name="K1day"  placeholder="Eingeben Preis" ></input><p id="demo11" ></p> </td>
   </tr>

   <tr>
		<th>11er :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K1month"  placeholder="Eingeben Preis" ></input><p id="demo12" ></p> </td>
   </tr>

   <tr>
		<th>3-Monate :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K3month"  placeholder="Eingeben Preis" ></input><p id="demo13" ></p> </td>
   </tr>

   <tr>
		<th>Halbjahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="K6month"  placeholder="Eingeben Preis" ></input><p id="demo14" ></p> </td>
   </tr>

   <tr>
		<th>Jahr :</th>
	</tr>


	<tr>
	<td> <input type="number" step=0.01 name="Kyear"  placeholder="Eingeben Preis" ></input><p id="demo15" ></p> </td>
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
	<td> <input type="number" step=0.01 name="F1day"  placeholder="Eingeben Preis" ></input><p id="demo16" ></p> </td>
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
	<td> <input type="number" step=0.01 name="KK1day"  placeholder="Eingeben Preis" ></input><p id="demo17" ></p> </td>
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
	<td> <input type="number" step=0.01 name="EEL"  placeholder="Eingeben Preis" ></input><p id="demo18" ></p> </td>
   </tr>
<tr>
		<th>Chalkbags</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EEC"  placeholder="Eingeben Preis" ></input><p id="demo19" ></p> </td>
   </tr>

   <tr>
		<th>Bürsten</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EEB"  placeholder="Eingeben Preis" ></input><p id="demo20" ></p> </td>
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
	<td> <input type="number" step=0.01 name="EKL"  placeholder="Eingeben Preis" ></input> <p id="demo21" ></p></td>
   </tr>

<tr>
		<th>Chalkbags</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EKC"  placeholder="Eingeben Preis" ></input><p id="demo22" ></p> </td>
   </tr>

   <tr>
		<th>Bürsten</th>
	</tr>

	<tr>
	<td> <input type="number" step=0.01 name="EKB"  placeholder="Eingeben Preis" ></input><p id="demo23" ></p> </td>
   </tr>

	

</table>	
	
</div>
</div>

</div>
<div class="col-lg-12" style="text-align: center;">

<input name="update"  type="submit" value="Einreichen" >
 <?php

include("db.php");
if (isset($_POST['update'])) {
  


  $A1day = $_POST['A1day'];  
    echo $A1day;
  
$A1month = $_POST['A1month'];

echo $A1month;

if (isset($_POST['satclo'])) {
  
  $satclo="Geschlossen";

  $insert_update ="UPDATE  main SET satclo='$satclo' ";

$run_insert_update= mysqli_query($conn, $insert_update);
if ($run_insert_update) {
  echo "<script>alert('Data has been added')</script>";
}
else
{
  echo "Error: " . $insert_update . "<br>" . mysqli_error($conn);
}
}
else {
 
 $sato= $_POST['SATo'];

 $satc = $_POST['SATc'];

 $satclo = "$sato <br> $satc";

$insert_update ="UPDATE  main SET satclo ='$satclo'";

$run_insert_update= mysqli_query($conn, $insert_update);

if ($run_insert_update) {
  echo "<script>alert('Data has been added')</script>";
}
else
{
  echo "Error: " . $insert_update . "<br>" . mysqli_error($conn);
}

 

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
