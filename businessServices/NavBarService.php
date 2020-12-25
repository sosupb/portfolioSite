<?php
/**
 * This class handles calls from the header navigation bar
 * @author Marc
 *
 */

require_once $_SERVER['DOCUMENT_ROOT'] . "/autoloader.php";

class NavBarService {
	
	public function __construct() {
		
	}
	
	public function moveToHomePage() {
		return "/index.php";
	}
	
	public function moveToContactPage() {
	    return "/presentation/pages/ContactPage.php";
	}
	
	public function moveToAboutPage() {
	    return "/presentation/pages/AboutPage.php";
	}
	
	public function moveToProjectsPage() {
	    return "/presentation/pages/ProjectsPage.php";
	}

	/**
	 * This method takes in a hyperlink tab and identifies if it is for the current page to send proper CSS
	 * @return the class type for this hyperlink
	**/
	public function getButtonClass($id) {
		if($_SERVER['PHP_SELF'] == $id) {
			return "active";
		}
		return "";
	}
}
