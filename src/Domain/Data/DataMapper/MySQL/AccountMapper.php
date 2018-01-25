<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Account\Account;

	class AccountMapper extends \Domain\Component\MySQLDataMapper
	{
		function insert(Account $account) {
			$sql = "INSERT INTO {$this->getTable()}
						  (id, ownerPersonId, password, username, creationDate)
							VALUES
							(:id, :ownerPersonId, :password, username, :creationDate)
							";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $account->getId());
			$statement->bindValue(":ownerPersonId", $account->getOwnerPersonId());
			$statement->bindValue(":password", $account->getPassword()->getHash());
			$statement->bindValue(":username", $account->getUsername());
			$statement->bindValue(":creationDate", $account->getCreationDate());
			$statement->execute();
		}
		function update(Account $account) {
			$sql = "UPDATE {$this->getTable()}
							SET ownerPersonId = :ownerPersonId,
									password = :password,
									username = :username,
									creationDate = :creationDate
							WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":ownerPersonId", $account->getOwnerPersonId());
			$statement->bindValue(":password", $account->getPassword()->getHash());
			$statement->bindValue(":username", $account->getUsername());
			$statement->bindValue(":creationDate", $account->getCreationDate());
			$statement->bindValue(":id", $account->getId());
			$statement->execute();
		}
		function deleteById(Account $account) {
			$sql = "DELETE FROM {$this->getTable()} WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $account->getId());
			$statement->execute();
		}
	}
