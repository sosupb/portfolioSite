package models;

public class project {
	
	private String name;
	private String img;
	private String language;
	private String skills;
	private String date;
	private String description;
	
	public project() {
		
	}
	
	public project(project newProject) {
		this.name = newProject.name;
		this.img = newProject.img;
		this.language = newProject.language;
		this.skills = newProject.skills;
		this.date = newProject.date;
		this.description = newProject.description;
	}
	
	public project(String name,String img, String language, String skills, String date, String description) {
		this.name = name;
		this.img = img;
		this.language = language;
		this.skills = skills;
		this.date = date;
		this.description = description;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}
	
	public String getImg() {
		return img;
	}
	
	public void setImg(String img) {
		this.img = img;
	}

	public String getLanguage() {
		return language;
	}

	public void setLanguage(String language) {
		this.language = language;
	}

	public String getSkills() {
		return skills;
	}

	public void setSkills(String skills) {
		this.skills = skills;
	}

	public String getDate() {
		return date;
	}

	public void setDate(String date) {
		this.date = date;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}
	
	
}
