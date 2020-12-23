<?php
	
	$title = "About Me Page";
	include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";
	
	$bs = new ProjectListService();
?>

	<div class="content">
		<h1>About Me</h1>
	</div>

<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>

