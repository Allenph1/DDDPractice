<?php

	namespace Domain\Entity\User;

	use Domain\Entity\User\Account\PasswordHash;

	class Account implements
	{
		private $id;
		private $username;
		private $passwordHash;
		function __construct(String $username, PasswordHash $passwordHash, DateTime $creationDate) {
			$this->setUsername($username);
			$this->setPassword($passwordHash);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
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
