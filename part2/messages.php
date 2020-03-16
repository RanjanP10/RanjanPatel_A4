<?php
// Ranjan PAtel - 8622791
require_once('connection.php');
$myClassObj = new db(); //classs object

 
    $data = $myClassObj->select(); // using class object calling class function

    $selectArray = array(); // create empty array
    echo ' <h3>Ranjan Patel</h3>';
    echo '<table style=" border: 1px solid black"> <tr > <th>username </th> <th> message</th></tr>'; // create table to display data organized
    while($row = mysqli_fetch_assoc($data)){ // fetching row from table
        $selectArray[] = $row; 
       echo "<tr><td>".$row['username']." </td><td> ".$row['message']."</td></tr>"; // printing array
    }
    echo '</table>';
?>