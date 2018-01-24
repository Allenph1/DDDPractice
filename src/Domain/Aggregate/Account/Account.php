<?php

	namespace Domain\Aggregate\Account;

	use Domain\Aggregate\Account\PasswordHash;

	class Account implements
	{
		private $id;
		private $ownerPersonId;
		private $username;
		private $passwordHash;
		function __construct(String $ownerPersonId, String $username, PasswordHash $passwordHash, DateTime $creationDate) {
			$this->setUsername($username);
			$this->setPassword($passwordHash);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
		function setOwnerPersonId(Int $ownerPersonId) {
			$this->ownerPersonId = $ownerPersonId;
		}
		function getOwnerPersonId() {
			return $this->ownerPersonId;
		}
		function setPassword(PasswordHash $passwordHash) {
			$this->passwordHash = $passwordHash;
		}
		function getPassword() {
			return $this->passwordHash;
		}
		function setUsername(String $username) {
			$this->username = $username;
		}
		function getUsername() {
			return $this->username;
		}
	}
