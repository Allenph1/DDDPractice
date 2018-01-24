<?php

	namespace Domain\Aggregate\Person;

	class Name
	{
		private $id;
		private $firstName;
		private $lastName;
		function __construct(String $firstName, String $lastName) {
			$this->setfirstName($firstName);
			$this->setLastName($lastName);
		}
		function setFirstName(String $firstName) {
			$this->firstName = $firstName;
		}
		function getFirstName() {
			return $this->firstName;
		}
		function setLastName(String $lastName) {
			$this->lastName = $lastName;
		}
		function getLastName() {
			return $this->lastName;
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
	}
