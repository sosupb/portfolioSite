<?php
	
	$title = "About Me Page";
	include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";
	
?>

	<div class="content">
		<h1>About Me</h1>
		<div class="infoCard">
    		<h2>Technical Skills:</h2>
    		<div class="infoCardElement">
    			<b>Programming Languages - </b><p>C#, C++, Java, PHP, JavScript, SQL, HTML, CSS</p>
    		</div>
    		<div class="infoCardElement">
    			<b>Development Tools - </b><p>Visual Studio, Eclipse, GIT, CI/CD, Cloud Development, MySQLWorkbench,</p>
    		</div>
		</div>
		<div class="infoCard">
    		<h2>Education:</h2>
    		<div class="infoCardElement">
    			<b>Grand Canyon University</b><p>Bachelor of Science in Computer Programming<br/>2019 - preset</p>
    		</div>
    		<div class="infoCardElement">
    			<b>San Diego Mesa College</b><p>Associates Degree in Computer Programming<br/>2015 - 2018</p>
    		</div>
    		<div class="infoCardElement">
    			<b>San Diego Miramar College</b><p>Certificate of Performance in Computer Programming<br/>2018</p>
    		</div>
		</div>
		<div class="infoCard">
    		<h2>Previous Experience:</h2>
    		<div class="infoCardElement">
        		<b>Internship - IT Assistant, Meadowbrook Middle School<br/>2002</b>
        			<p>Assisted in multiple types of system debugging to help other faculty lessen their workload.<br/>
    				   Helping students learn how to navigate Windows and use their login to access academic resources.<br/>
    				   Servicing systems in the computer labs including physically cleaning them and clearing any non-essential programs that were installed on them.
    				</p>
			</div>
			<div class="infoCardElement">
        		<b>Construction Foreman<br/>2003 - present</b>
        			<p>Delegate tasks to other employees based on their skill levels to speed up individual tasks.<br/>
    				   Communicating with the job site Owner Representatives to provide the desired end product.<br/>
    				   Making informed decisions to progress the work being done when potential problems threaten to halt the job completely.
        			</p>
    		</div>
		</div>
		
	</div>

<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>

