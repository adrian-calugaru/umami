<?php 
include("connect.php");
?>
<link rel="stylesheet" type="text/css" href="/CMS/CSS/Pageeditor.CSS">
<script type="text/javascript src='jquery-2.1.4.min.js'"></script>
<script type="text/javascript" src='test.js'></script>
<div id="editpanel">
	<form action="http://localhost/CMS/Functions/Editor_Page.php" method="POST">
		<input type="text" name="editname" placeholder="Rename Page">
		<input type="button" name="editpaganame" value="Rename">
	</form>
</div>
<?php
$_SESSION['id']=$_POST['id'];
echo $_SESSION['id'];
?>
<iframe src="/CMS/" id="display" height="100%" width="100%"></iframe>