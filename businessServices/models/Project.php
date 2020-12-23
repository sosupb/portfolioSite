<?php

require_once getcwd() . "/autoloader.php";

class Project {
	
	private $name;
	private $img;
	private $language;
	private $skills;
	private $date;
	private $description;
	
    private function __construct(){
	    
	}
	
	public static function copyConstructor(Project $newProject) {
	    $obj = new Project();
		$obj->name = $newProject->name;
		$obj->img = $newProject->img;
		$obj->language = $newProject->language;
		$obj->skills = $newProject->skills;
		$obj->date = $newProject->date;
		$obj->description = $newProject->description;
		return $obj;
	}
	
	public static function settingConstructor($name, $img, $language, $skills, $date, $description) {
	    $obj = new Project();
		$obj->name = $name;
		$obj->img = $img;
		$obj->language = $language;
		$obj->skills = $skills;
		$obj->date = $date;
		$obj->description = $description;
		return $obj;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * @return mixed
	 */
	public function getImg()
	{
	    return $this->img;
	}
	
	/**
	 * @return mixed
	 */
	public function getLanguage()
	{
	    return $this->language;
	}
	
	/**
	 * @return mixed
	 */
	public function getSkills()
	{
	    return $this->skills;
	}
	
	/**
	 * @return mixed
	 */
	public function getDate()
	{
	    return $this->date;
	}
	
	/**
	 * @return mixed
	 */
	public function getDescription()
	{
	    return $this->description;
	}
	
	/**
	 * @param mixed $img
	 */
	public function setImg($img)
	{
	    $this->img = $img;
	}
	
	/**
	 * @param mixed $language
	 */
	public function setLanguage($language)
	{
	    $this->language = $language;
	}
	
	/**
	 * @param mixed $skills
	 */
	public function setSkills($skills)
	{
	    $this->skills = $skills;
	}
	
	/**
	 * @param mixed $date
	 */
	public function setDate($date)
	{
	    $this->date = $date;
	}
	
	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
	    $this->description = $description;
	}
	
	
}
