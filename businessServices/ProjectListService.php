<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";

class ProjectListService {
	
	//list of projects
	private $projects;
	
	public function __construct() {
		$this->projects = array();
		array_push($this->projects, Project::settingConstructor("Dark Current", "/resources/default/img/darkCurrentThumbnail.png", "C#, XNA Studio", "Visual Studio, ", 
		                                                        "2015", "2D, Top down shooter.", "/resources/default/img/darkCurrentPanel.png"));
		array_push($this->projects, Project::settingConstructor("Online Store Application", "/resources/default/img/storeAppThumbnail.png", "PHP, HTML, CSS, SQL", "CI/CD, git, backend design", "2018", 
										"An online grocery store. Users can register or login, add to thier carts and checkout purchases.", "/resources/default/img/storeAppPanel.png"));
		array_push($this->projects, Project::settingConstructor("Music Album Library Application", "/resources/default/img/albumLibraryThumbnail.png", "PHP, HTML, CSS, SQL", "CI/CD, git, backend design", "2020", 
										"Web application for users to store music album information. "
		                                . "Users are allowed to create an account and add/rate albums in their library.", "/resources/default/img/albumLibraryPanel.png"));
		array_push($this->projects, Project::settingConstructor("Personal Store Application", "/resources/default/img/personalStoreThumbnail.png", "C#, ASP.NET, Razor Views, MySQL", "Visual Studio, MVC, CI/CD, GitHub workflows", "2022", 
		                                "A store application where the primary user may add personal products for sale and registered users may login too purcahse the items throug ha cart and cheout system",
		                                "/resources/default/img/personalStorePanel.png"));
		ActivityLogger::info("Created list of projects!");
		foreach($this->projects as $project) {
		    ActivityLogger::info("Project : " . $project->getName());
		}
	}
	
	public function getProjects() {
		return $this->projects;
	}
}

?>