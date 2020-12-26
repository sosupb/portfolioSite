<?php

$title = "Contact Page";
include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";

$bs = new ProjectListService();
?>

	<div class="content">
		<h1>Contact</h1>
		<div class="contactFormWrapper">
    		<form action="mailToHandler.php" method="post">
    			<div class="inputWrapper">
    				<label for="name">Name</label>
    				<input id="name" type="text" name="name"><br/>
    			</div>
    			<div class="inputWrapper">
    				<label for="email">Email</label>
    				<input id="email" type="text" name="email"><br/>
    			</div>
    			<div class="inputWrapper">
    				<label for="message">Message</label>
    				<textarea id="message" name="message" rows="6" cols="25"></textarea><br/>
    			</div>
    			<input type="submit" value="Send"><input type="reset" value="Reset Form">
    		</form>
		</div>
	</div>

<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>
