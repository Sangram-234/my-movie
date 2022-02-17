<?php
// MUTE NOTICES
//error_reporting(E_ALL & ~E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "";
$database = "movie";

//movie -- table_name
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connected";
    //return "connected";
}

$sql = "SELECT * FROM `movie` WHERE 1";
$query =  mysqli_query($conn, $sql);
 

   
  ?>
   <table border="1">
       <tr>
           <td>S_no.</td>
           <td>Movie_name</td>
           <td>Lead_actor</td>
           <td>Lead_actress</td>
		   <td>Director</td>
		   <td>Release_date</td>
       </tr>
       <?php foreach ($query as $rows) {?>
       <tr>
           <td><?php echo $rows['S_no.'];?></td>
           <td><?php echo $rows['Movie_name'];?></td>
           <td><?php echo $rows['Lead_actor'];?></td>
           <td><?php echo $rows['Lead_actress'];?></td>
		   <td><?php echo $rows['Director'];?></td>
		   <td><?php echo $rows['Release_date'];?></td>
       </tr>
       <?php }?>
   </table> 
  <?php


?>