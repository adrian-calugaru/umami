<?php
include("Functions/connect.php");		
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/Layout.CSS">
<link rel="stylesheet" type="text/css" href="CSS/Menu.CSS">
	<title></title>
</head>
<body>
	<div id="Container">
		<div id="Header"></div>
		<div id="NavBar">
			<nav>
				<ul>
				<?php

					$query="SELECT * FROM Pages";
					$display=mysqli_query($connect,$query);
					while ($row=$display->fetch_assoc()) {
						
					echo"<li>".$row['PageName']."</li>";
				}
				?>
				</ul>
			</nav>
		</div>
		<div id="Content">
		<div id="Post">
		<H1>Where does it come from?</H1>
			<p>
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
			</p>
			</div>
		</div>
		<div id="Footer"></div>
	</div>
</body>
</html>

something new