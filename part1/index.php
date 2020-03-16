<!DOCTYPE html>
<?php

//Ranjan Patel * 8622791
SESSION_START();

?>
<html lang="en">
<head>
<title>Ranjan_A4_P1</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

   
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="./js/jquery.tablesorter/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="./includes/shared_javascript_functions.js"></script>
<meta charset="utf-8">
  
  <style>
 body {
	background: url(http://www.inkspilldesign.com/demo/wood-tile-background.jpg);
	background-color: #424242;
	font-family: Tahoma;
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100vh;
	width: 100vw;
}

#container {
	width: 485px;
	padding: 8px 8px 20px 8px;
	margin: 20px auto;
	background-color: #ABABAB;
	border-radius: 4px;
	border-top: 2px solid #FFF;
	border-right: 2px solid #FFF;
	border-bottom: 2px solid #C1C1C1;
	border-left: 2px solid #C1C1C1;
	box-shadow: -3px 3px 7px rgba(0, 0, 0, .6), inset -100px 0px 100px rgba(255, 255, 255, .5);
}



.button {
	display: inline-block;
	margin: 2px;
	width: 150px;
	height: 200px;
	
	border-radius: 4px;
}

.coinB{
    display: inline-block;
	margin: 2px;
	width: 70px;
	height: 70px;

	font-weight: bold;
	border-radius: 2px;
}

.digits {
	color: #181818;
	text-shadow: 1px 1px 0px #FFF;
	background-color: #EBEBEB;
	border-top: 2px solid #FFF;
	border-right: 2px solid #FFF;
	border-bottom: 2px solid #C1C1C1;
	border-left: 2px solid #C1C1C1;
	border-radius: 4px;
	box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #DCDCDC;
}

.digits:hover,
.mathButtons:hover,
.clearButton:hover {
	background-color: #FFBA75;
	box-shadow: 0px 0px 2px #FFBA75, inset 0px -20px 1px #FF8000;
	border-top: 2px solid #FFF;
	border-right: 2px solid #FFF;
	border-bottom: 2px solid #AE5700;
	border-left: 2px solid #AE5700;
}

.clearButton {
	color: #FFF;
	display: inline-block;
	margin: 2px;
	width: 50px;
	height: 25px;
	
	border-radius: 4px;
	text-shadow: -1px -1px 0px #44006F;
	background-color: #D20000;
	border-top: 2px solid #FF8484;
	border-right: 2px solid #FF8484;
	border-bottom: 2px solid #800000;
	border-left: 2px solid #800000;
	box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #B00000;
}
.error{
	color:red;
}
.success{
	color:green;
}
.buyprocess{
	margin: 2px 2px 6px 2px;
	color: #FFF;
	display: inline-block;
	margin: 2px;
	padding:2px;
	width: 100px;
	height: 25px;
	align :right;
	border-radius: 4px;
	text-shadow: -1px -1px 0px #44006F;
	background-color: #434343;
	border-top: 2px solid #C1C1C1;
	border-right: 2px solid #C1C1C1;
	border-bottom: 2px solid #181818;
	border-left: 2px solid #181818;
	box-shadow: 0px 0px 2px #030303, inset 0px -20px 1px #2E2E2E;
}
  </style>
</head>
<body >
<div class="container">
	<fieldset id="container">
		
		<h3 class = "success"> <?php 
		if(isset($_REQUEST['success'])) echo "Please Collect your item from down container..!!";
		
		?>
			</h3>
			<h3 class= "error"> <?php 
	
		if(isset($_REQUEST['fail'])) echo "Please enter axact coins for product........";
		?>
			</h3>
			<p> Choose Your Product(Ranjan Patel)</p>
			
            <input class="button digits" 
			type="image" 
			src="images/chips.jpg" 
			alt="Submit" width="48" height="48" value= "chips"  id = "chips" name = "chips" onclick = "chipsF()">
           
			<input class="button digits" type="image" src="images/chocolate.jpg" 
			alt="Submit" width="48" height="48" value="chocolate" name = "chocolate" id = "chocolate" onclick = "chocolateF()">
 
            <input class="button digits" type="image" src="images/pop.jpg" 
			alt="Submit" width="48" height="48" value = "pop" name = "pop"  id = "pop" onclick = "popF()">
    
            <input type="text" name= "choice" id = "choice" readonly value="<?php if(isset($_SESSION['product'])) echo $_SESSION['product'];?>">
            <span id="error" class="error"></span>
            <br>
            <p> Add coins </p>
            <input class="coinB" type="image" src="images/2dollor.jpg" alt="Submit" width="48" height="48" value= "2.00" name = "2dollor" id="2.00">
            <input class="coinB" type="image" src="images/dollor.jpg" alt="Submit" width="48" height="48" value= "1.00" name = "dollor" id= "1.00">
            <input class="coinB" type="image" src="images/25cent.jpg" alt="Submit" width="48" height="48" value= "0.25" name = "25cents" id= "0.25">
            <input class="coinB" type="image" src="images/10cents.jpg" alt="Submit" width="48" height="48" value= "0.10" name = "10cents" id= "0.10">
            <input class="coinB" type="image" src="images/5cents.jpg" alt="Submit" width="48" height="48" value= "0.05" name = "5cents" id= "0.05">
			
			<input type="text" name= "money" id = "money"  size="50" readonly 
			value= "<?php if(isset($_SESSION['total'])) echo $_SESSION['total'];?>">
			 <button  class = "clearButton" onClick="clearbox()"> clear</button>	
			<br><span id="errorM" class="error"></span>

			<br><button id="submit" class = " buyprocess" onClick="goto()">  Hit to Buy</button>


		
	</fieldset>
</div>
	
<script  type="text/javascript">

var img;
function chipsF(){
	img = document.getElementById('chips'); // get value of image clicked
	document.getElementById('choice').value = img.value; //set value in textbox

}
function chocolateF(){
	img = document.getElementById('chocolate');// get value of image clicked
	document.getElementById('choice').value = img.value;//set value in textbox

}
function popF(){
	img = document.getElementById('pop');// get value of image clicked
	document.getElementById('choice').value = img.value;//set value in textbox

}

function clearbox(){
	
	document.getElementById('money').value = " ";
	window.location.href='calculation.php?session=1';
}
var clicked = [];
    

$(".coinB").on("click",function(){

  console.clear();

  // Get the clicked element id
  var this_id = this.id;
  console.log("Clicked id: "+this_id);

    // Check if in array
  
      clicked.push(this_id);
      
    
   


  // Show arrays content in console
  console.log(clicked);
  // Show the ids in inputs as a coma separated string
  $("#money").val(clicked.join(" + "));

});
function goto(){
	var money = document.getElementById("money").value;
	var product = document.getElementById("choice").value;
	var check = '';
	var check1 = '';
	if(product.length == 0){
	
		document.getElementById("error").innerHTML = "Please select any product..!!";
	}
	
	else
	{
		check = "1";
	}
	if(money.length == 0){
		document.getElementById("errorM").innerHTML = "Please Enter coins!!";
	}
	
	else
	{
		check1 = "1";
	}
	if(check.length == 1 && check1.length == 1){

		window.location.href='calculation.php?money='+money+'&product='+product;
	}
	
    }



</script>

</body>
</html>