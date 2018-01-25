<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Person\Person;

	class PersonMapper extends \Domain\Component\MySQLDataMapper
	{
		function insert(Person $person) {
			$sql = "INSERT INTO {$this->getTable()}
						  (id, firstName, lastName, creationDate)
							VALUES
							(:id, :firstName, :lastName, :creationDate)
							";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $person->getId());
			$statement->bindValue(":firstName", $person->getFirstName());
			$statement->bindValue(":lastName", $person->getlastName());
			$statement->bindValue(":creationDate", $person->getCreationDate());
			$statement->execute();
		}
		function update(Person $person) {
			$sql = "UPDATE {$this->getTable()}
							SET firstName = :firstName,
									lastName = :lastName,
									creationDate = :creationDate
							WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":firstName", $person->getFirstName());
			$statement->bindValue(":lastName", $person->getLastName());
			$statement->bindValue(":creationDate", $person->getCreationDate());
			$statement->bindValue(":id", $person->getId());
			$statement->execute();
		}
		function deleteById(Person $person) {
			$sql = "DELETE FROM {$this->getTable()} WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $person->getId());
			$statement->execute();
		}
	}
