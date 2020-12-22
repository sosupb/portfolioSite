package controllers;

import java.util.ArrayList;
import java.util.List;

import javax.annotation.PostConstruct;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.RequestScoped;

import models.project;

@ManagedBean
@RequestScoped
public class projectListController {
	
	//list of projects
	private List<project> projects;
	
	//current position in the list
	private int current;
	
	@PostConstruct
	public void init() {
		projects = new ArrayList<project>();
		projects.add(new project("Dark Current", "img/darkCurrentThumbnail.jpg", "C#, XNA Studio", "Visual Studio, ", "2015", "2D, Top down shooter."));
		projects.add(new project("Online Store Application", "img/storeAppThumbnail.png", "PHP, HTML, CSS, SQL", "CI/CD, git, backend design", "2018", 
										"An online grocery store. Users can register or login, add to thier carts and checkout purchases."));
		projects.add(new project("Music Album Library Application", "img/albumLibraryThumbnail.png", "PHP, HTML, CSS, SQL", "CI/CD, git, backend design", "2020", 
										"Web application for users to store music album information. "
										+ "Users are allowed to create an account and add/rate albums in their library."));
		current = 0;
	}
	
	public List<project> getProjects() {
		return projects;
	}
	
	public project peekProjects() {
		return projects.get(current);
	}
	
	public project nextProjects() {
		current++;
		
		if(current >= projects.size()) {
			current = projects.size() - 1;
			return null;
		} else {
			return projects.get(current);
		}
	}
}
