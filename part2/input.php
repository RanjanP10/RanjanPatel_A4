<?php
// Ranjan PAtel - 8622791
require_once('connection.php');

   

        $username = $_REQUEST['username'];
		$message = $_REQUEST['message'];
       // $username= $_POST['username'];
       // $password= $_POST['password'];
       
       
            $myClassObj = new db(); //classs object
            $myClassObj->saveRecords("message",$username,$message); // call funntion to input data
          

      
		   
    
?>
