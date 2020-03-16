<?php
//Ranjan Patel - 8622791...
SESSION_START();
function makepayment($product,$rate,$enterprice,$enterproduct){ 
    // function as PHP OOPs concepts.........
    $result = "";
    if($product == $enterproduct){ //checking 2 variables
        if($rate == $enterprice){ // checking 2 price
            header("Location: index.php?success=1");
        }
        else{
            header("Location: index.php?fail=1");
        }
    }
    
}
if(isset($_REQUEST['session'])){
    $_SESSION['total'] = "";
    header("Location: index.php");
}

$money = $_REQUEST['money'];
$choice = $_REQUEST['product']; // get value from URL 

$_SESSION['product'] = $choice;
$pay = array_map('floatval',explode(" ", $money));
 // convert string to array and floatval will convert it in number

$total = number_format(array_sum($pay),2);
// using numberformat set 2 decimal point in number and array_sum funcion will do sum of alll array elements
$_SESSION['total'] = $total;
makepayment("chips","1.75",$total,$choice); // calling function with appropriate arguments
makepayment("chocolate","1.25",$total,$choice);
 makepayment("pop","1.50",$total,$choice);







?>  