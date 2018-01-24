<?php

	namespace Domain\Aggregate\User\Account;

	class PasswordHash
	{
		private $hash = null;
		function setPassword(String $password) {
			$this->hash = password_hash($password);
		}
		function setHash(String $hash) {
			$this->hash = $hash;
		}
		function getHash() {
			return $this->hash;
		}
	}
