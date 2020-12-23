<?php
	
	$title = "About Me Page";
	include $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";
	
	$bs = new ProjectListService();
?>

	<div class="content">
		<h1>About Me</h1>
	</div>

<?php 

    include $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>

