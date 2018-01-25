<?php

	namespace Domain\Data\Factory\MySQL;

	use Domain\Aggregate\Account\Account;
  use Domain\Aggregate\Account\PasswordHash;
	use Domain\Interface\CollectionFactory;
	use Domain\Interface\Factory;

	class MySQLPostFactory implements Factory, CollectionFactory {
		function create(Array $row) {
			return new Account(
				(Int) $row['id'],
				(Int) $row['ownerPersonId'],
				(String) $row['username'],
				new PasswordHash()->setHash($row['passwordHash']),
				new DateTime($row['creationDate'])
			);
		}
		function createCollection(Array $rows) {
			$collection = [];
			foreach($row as $row) {
				$collection[] = $this->create($row);
			}
			return $collection;
		}
	}
