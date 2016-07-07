<?php
include('connect.php');
				if(isset($_POST['edit']))
				{	
					
					$id=$_POST['edit'];

					$query5=" INSERT IGNORE INTO Pagecontent (PageID) VALUES ('$id')";
					
					mysqli_query($connect,$query5);

					header('Location:http://localhost/CMS/Functions/Editor_Page.php');

				}
				?>