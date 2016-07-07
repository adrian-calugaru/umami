<?php
include('connect.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/CMS/CSS/Dashboard.css">
<link rel="stylesheet" type="text/css" href="/CMS/CSS/Menu.CSS">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title></title>
</head>
<body>
	<div id="Container">
		<div id="NavBar">
		<nav>
			<ul>
				<li>
					<a href="http://localhost/CMS/Functions/Editor_Dashboard.php?p=Pages">Pages</a>
				</li>
				
			</ul>
			</nav>
		</div>
		<div id="Content">
		<?php
		if($_GET[p]=="Pages"){
			?>
				<div id="Left">
					<div id="Add">
		<form name="insertpage">

			<input type="text" name="page" placeholder="Page Name"><br><br>
			<input type="text" name="keywords" placeholder="Keywords"><br><br>
			<input type="text" name="description" placeholder="MetaDescription"><br><br>
			<input type="button" name="Submit" value="Add page" onclick="get()" class="submit">

		</form>
		

	</div>
				</div>
				<div id="Right">
					<div id="Display">
		
	
		
		</div>
				</div>
			<?php
}

				else{

					?>
					<H1>Hello</H1>
					<?php
				}
			?>
		</div>
		<div id="Footer"></div>
	</div>
	<script type="text/javascript" src="functions.js"></script>
</body>
</html>