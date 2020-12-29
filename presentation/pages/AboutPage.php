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
    			<b>Grand Canyon University<span class="infoCardDate">2019 - present</span></b><p>Bachelor of Science in Computer Programming</p>
    		</div>
    		<div class="infoCardElement">
    			<b>San Diego Mesa College<span class="infoCardDate">2015 - 2018</span></b><p>Associates Degree in Computer Programming</p>
    		</div>
    		<div class="infoCardElement">
    			<b>San Diego Miramar College<span class="infoCardDate">2018</span></b><p>Certificate of Performance in Computer Programming</p>
    		</div>
		</div>
		<div class="infoCard">
    		<h2>Previous Experience:</h2>
    		<div class="infoCardElement">
        		<b>Internship - IT Assistant, Meadowbrook Middle School<span class="infoCardDate">2002</span></b>
        			<ul>
        			    <li>Assisted in multiple types of system debugging to help other faculty members lessen their workload.</li>
    				    <li>Helping students learn how to navigate Windows and use their login to access academic resources.</li>
    				    <li>Servicing systems in the computer labs including physically cleaning them and clearing any non-essential programs that were installed on them.</li>
    				</ul>
			</div>
			<div class="infoCardElement">
        		<b>Construction Foreman<span class="infoCardDate">2003 - present</span></b>
        			<ul>
        			    <li>Delegate tasks to other employees based on their skill levels to speed up individual tasks.</li>
    				    <li>Communicating with the job site Owner Representatives to provide the desired end product.</li>
    				    <li>Making informed decisions to progress the work being done when potential problems threaten to halt the job completely.</li>
        			</ul>
    		</div>
		</div>
		
	</div>

<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>

