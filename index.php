<?php
	
	$title = "Home Page";
	include "/presentation/Layouts/_header.php";
	
	$bs = new ProjectListService();
?>

<div class="content">
	<h1>Projects</h1>
	
	<?php 
	foreach ($bs->getProjects() as $project) { //loop through for each card
	?>
	
		<div class="projectCardWrapper">
			
			<div class="projectCard">
	  			<img src="<?=$project->img?>" alt="<?=$project->name?>" style="width:100%"/>
		  		<div class="insideCardWrapper">
	    			<h4>Name: <?=$project->name?></h4>
	    			<p>Languages: <?=$project->language?></p>
	    			<p>Skills: <?=$project->skills?></p>
	    			<p>Date: <?=$project->date?></p>
	    			<p>Description: <?=$project->description?></p>
	  			</div>
			</div>
			
			<div class="hiddenCard">
				<img src="<?=$project->img?>" alt="<?=$project->name?>" style="width: 100%; display: flex;"/>
			</div>
			
		</div>
		
	<?php 
	}
	?>
	
</div>

<?php 

	include "/presentation/Layouts/_footer.php";

?>
