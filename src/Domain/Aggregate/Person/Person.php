<?php

	namespace Domain\Aggregate\Person;

	class Person
	{
		private $id;
		private $firstName;
		private $lastName;
		private $accountId;
		private $creationDate;
		function __construct(Name $name, Int $accountId, DateTime $creationDate) {
			$this->setName($name);
			$this->setAccountId($accountId);
			$this->setCreationDate($creationDate);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
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
		function setName(Name $name) {
			$this->name = $name;
		}
		function getName() {
			return $this->name;
		}
		function setAccountId(Int $accountId) {
			$this->accountId = $accountId;
		}
		function getAccountId() {
			return $this->accountId;
		}
		function setCreationDate(DateTime $creationDate) {
			$this->creationDate = $creationDate;
		}
		function getCreationDate() {
			return $this->creationDate;
		}
	}
