<?php
/**
 * This class handles calls from the header navigation bar
 * @author Marc
 *
 */

require_once "autoloader.php";

class NavBarService {
	
	public function __construct() {
		
	}
	
	public function moveToHomePage() {
		return "/index";
	}
	
	public function moveToContactPage() {
		return "/pages/Contact";
	}
	
	public function moveToAboutMePage() {
		return "/pages/AboutMe";
	}

	/**
	 * This method takes in a hyperlink tab and identifies if it is for the current page to send proper CSS
	 * @return the class type for this hyperlink
	
	public String getButtonClass(String id) {
		FacesContext facesContext = FacesContext.getCurrentInstance();
		String viewId = facesContext.getViewRoot().getViewId();
		
		LOGGER.info("The current view id is: " + viewId);
		System.out.println("The current view id is: " + viewId);
		if(viewId.equals(id)) {
			return "active";
		}
		return "";
	}*/
}
