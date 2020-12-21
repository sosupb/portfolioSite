package controllers;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;
import javax.faces.context.FacesContext;

import org.jboss.logging.Logger;

/**
 * This class handles calls from the header navigation bar
 * @author Marc
 *
 */
@ManagedBean(name = "navBarController", eager = true)
@RequestScoped
public class NavBarController {
	
	private static final Logger LOGGER = Logger.getLogger(NavBarController.class);
	
	public NavBarController() {
		
	}
	
	/**
	 * Navigates to the home page
	 * @return home page name
	 */
	public String moveToHomePage() {
		return "/index";
	}
	
	/**
	 * Navigates to the contact page
	 * @return contact page name
	 */
	public String moveToContactPage() {
		return "/pages/Contact";
	}
	
	/**
	 * Navigates to the about me page
	 * @return about me page name
	 */
	public String moveToAboutMePage() {
		return "/pages/AboutMe";
	}

	/**
	 * This method takes in a hyperlink tab and identifies if it is for the current page to send proper CSS
	 * @return the class type for this hyperlink
	 */
	public String getButtonClass(String id) {
		FacesContext facesContext = FacesContext.getCurrentInstance();
		String viewId = facesContext.getViewRoot().getViewId();
		
		LOGGER.info("The current view id is: " + viewId);
		System.out.println("The current view id is: " + viewId);
		if(viewId == id) {
			return "active";
		}
		return "";
	}
}
