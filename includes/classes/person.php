<?php

	class Person{
		public $firstName;
		public $middleInitial;
		public $lastName;
		public $gender;
		public $birthdate;
		public $email;
		public $phone;
		public $address;
		public $city;
		public $state;
		public $zip;
		public $personType;
		public $isActive;
		public $classes;
		
		function __construct($firstName, $middleInitial, $lastName, $gender, $birthdate, $email, $phone, $address, $city, $state, $zip, $personType, $isActive){
			$this->firstName = $firstName;
			$this->middleInitial = $middleInitial;
			$this->lastName = $lastName;
			$this->gender = $gender;
			$this->birthdate = $birthdate;
			$this->email = $email;
			$this->phone = $phone;
			$this->address = $address;
			$this->city = $city;
			$this->state = $state;
			$this->zip = $zip;
			$this->personType = $personType;
			$this->isActive = $isActive;
		}
		
		public function addClass($class){
			$this->classes[] = $class;
			return $this->classes;
		}
		
	}

?>