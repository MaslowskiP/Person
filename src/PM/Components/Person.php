<?php

namespace PM\Components;

class Person {

	private $name;
	private $telephone;
	private $gender;
	private $email;

	public function getName() {
		return $this->name;
	}	

	public function setName($name) {
		$this->name = $name;
	}

	public function getTelephone() {
		return $this->Telephone;
	}	

	public function setTelephone($Telephone) {
		$this->Telephone = $Telephone;
	}

	public function getGender() {
		return $this->gender;
	}	

	public function setGender($gender) {
		$this->gender = $gender;
	}

	public function getEmail() {
		return $this->email;
	}	

	public function setEmail($email) {
		$this->email = $email;
	}

}