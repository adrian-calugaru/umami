<?php 
include('connect.php');


					$id=$_POST['hid'];

					$query3="DELETE FROM Pages WHERE ID ='$id' ";

					mysqli_query($connect,$query3);

				
?>