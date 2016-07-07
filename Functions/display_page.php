<?php
include('connect.php');
			$query2="SELECT * FROM Pages";
			$display=mysqli_query($connect,$query2);
			while ($row=$display->fetch_assoc()) {
				?>
				<form name="displaypages">
				<?php
			echo"<span>Page Name:".$row['PageName']."</span><br><span>Created at: ".$row['Timestamp']."</span><br>";
			echo"<input type='button' name='delete' onclick='del({$row['ID']})' class='display' value='Delete'>";
			echo"<input type='button' name='edit' class='display' value='Edit Page' onclick='editor({$row['ID']})'>";
			echo"<input type='hidden' name='hid' class='display' value='".$row['ID']."'>";
			?>
			</form>
			<?php
		}
?>