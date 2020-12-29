<?php
	
	$title = "About Me Page";
	include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";
	
?>

	<div class="content">
		<h1>About Me</h1>
		<div style="margin-left: 3%;">
    		<h2>Technical Skills:</h2>
    		<b>Programming Languages - </b><p>C#, C++, Java, PHP, JavScript, SQL, HTML, CSS</p><br/>
    		<b>Development Tools - </b><p>Visual Studio, Eclipse, GIT, CI/CD, Cloud Development, MySQLWorkbench,</p><br/>
		</div>
		<div style="margin-left: 3%;">
    		<h2>Education:</h2>
    		<b>Grand Canyon University</b><p>Bachelor of Science in Computer Programming</p></br>
    		<b>San Diego Mesa College</b><p>Associates Degree in Computer Programming</p></br>
    		<b>San Diego Miramar College</b><p>Certificate of Performance in Computer Programming</p></br>
		</div>
		
	</div>

<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>

