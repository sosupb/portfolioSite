<?php


class ProjectListService {
	
	//list of projects
	private $projects;
	
	public function __construct() {
		$projects = array();
		array_push($projects, Project::settingConstructor("Dark Current", "/resources/default/img/darkCurrentThumbnail.png", "C#, XNA Studio", "Visual Studio, ", "2015", "2D, Top down shooter."));
		array_push($projects, Project::settingConstructor("Online Store Application", "/resources/default/img/storeAppThumbnail.png", "PHP, HTML, CSS, SQL", "CI/CD, git, backend design", "2018", 
										"An online grocery store. Users can register or login, add to thier carts and checkout purchases."));
		array_push($projects, Project::settingConstructor("Music Album Library Application", "/resources/default/img/albumLibraryThumbnail.png", "PHP, HTML, CSS, SQL", "CI/CD, git, backend design", "2020", 
										"Web application for users to store music album information. "
										+ "Users are allowed to create an account and add/rate albums in their library."));
	}
	
	public function getProjects() {
		return $this->projects;
	}
}

?>