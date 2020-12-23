<?php
	
	$title = "Home Page";
	include_once __DIR__ . "/presentation/Layouts/_header.php";
	
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
	  			<img src="<?echo $project->getImg();?>" alt="<?echo $project->getName();?>" style="width:100%"/>
		  		<div class="insideCardWrapper">
	    			<h4>Name: <?echo $project->getName();?></h4>
	    			<p>Languages: <?echo$project->getLanguage();?></p>
	    			<p>Skills: <?echo $project->getSkills();?></p>
	    			<p>Date: <?echo $project->getDate();?></p>
	    			<p>Description: <?echo $project->getDescription();?></p>
	  			</div>
			</div>
			
			<div class="hiddenCard">
				<img src="<?echo $project->getImg();?>" alt="<?echo $project->getName();?>" style="width: 100%; display: flex;"/>
			</div>
			
		</div>
		
	<?php 
	}
	?>
	
</div>

<?php 

    include_once __DIR__ . "/presentation/Layouts/_footer.php";

?>
