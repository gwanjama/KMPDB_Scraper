<?php
class Doctor{
	public $name;
	public $regDate;
	public $regID;
	public $address;
	public $qualifications;
	public $specialty;
	public $subSpecialty;
	
	function __construct($name, $regDate, $regID, $address, $qualifications, $specialty, $subSpecialty){
		$this->name = $name;
		$this->regDate = $regDate;
		$this->regID = $regID;
		$this->address = $address;
		$this->qualifications = $qualifications;
		$this->specialty = $specialty;
		$this->subSpecialty = $subSpecialty;
	}	
		
}
?>