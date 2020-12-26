<?php
	
	$title = "Contact Page";
	include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";
	
	$bs = new ProjectListService();
?>

	<div class="content">
		<h1>Contact</h1>
		<form action="mailToHandler.php" method="post">
			<label for="name">Name</label>
			<input id="name" type="text" name="name"><br/>
			<label for="email">Email</label>
			<input id="email" type="text" name="email"><br/>
			<label for="message">Message</label>
			<textarea id="message" name="message" rows="6" cols="25"></textarea><br/>
			<input type="submit" value="Send"><input type="reset" value="Reset Form">
		</form>
	</div>

<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>
