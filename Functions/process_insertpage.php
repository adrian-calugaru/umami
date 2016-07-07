<?php 
include('connect.php');

			$pagename=$_POST['name'];
			$query="INSERT INTO Pages (PageName) VALUES ('$pagename')";
			mysqli_query($connect,$query);
				
?>