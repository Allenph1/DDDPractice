<?php

	namespace Domain\Aggregate\Person;

	use \Domain\Aggregate\Person\Name;
	use \Domain\Aggregate\Account\Account;

	class Person
	{
		private $id;
		private $name;
		private $account;
		private $creationDate;
		function __construct(Name $name, Account $account, DateTime $creationDate) {
			$this->setName($name);
			$this->setAccount($account);
			$this->setCreationDate($creationDate);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
		function setName(Name $name) {
			$this->name = $name;
		}
		function getName() {
			return $this->name;
		}
		function setAccount(Account $account) {
			$this->account = $account;
		}
		function getAccount() {
			return $this->account;
		}
		function setCreationDate(DateTime $creationDate) {
			$this->creationDate = $creationDate;
		}
		function getCreationDate() {
			return $this->creationDate;
		}
	}