<?php
	
	$title = "Home Page";
	include $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_header.php";
	
	$bs = new ProjectListService();
	$bs = new ActivityLogger($bs);
?>

<div class="content">
	<h1>Projects</h1>
	
	<?php 
	foreach ($bs->getProjects() as $project) { //loop through for each card
	?>
	
		<div class="projectCardWrapper">
			
			<div class="projectCard">
	  			<img src="<?=$project->getImg()?>" alt="<?=$project->getName()?>" style="width:100%"/>
		  		<div class="insideCardWrapper">
	    			<h4>Name: <?=$project->getName()?></h4>
	    			<p>Languages: <?=$project->getLanguage()?></p>
	    			<p>Skills: <?=$project->getSkills()?></p>
	    			<p>Date: <?=$project->getDate()?></p>
	    			<p>Description: <?=$project->getDescription()?></p>
	  			</div>
			</div>
			
			<div class="hiddenCard">
				<img src="<?=$project->getImg()?>" alt="<?=$project->getName()?>" style="width: 100%; display: flex;"/>
			</div>
			
		</div>
		
	<?php 
	}
	?>
	
</div>

<?php 

    include $_SERVER['DOCUMENT_ROOT'] . "/presentation/Layouts/_footer.php";

?>
