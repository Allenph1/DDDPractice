<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Person\Person;
	use \Domain\Component\MySQLDataMapper;
	use \Domain\Interface\Data\DataMapper\PersonDataMapper;

	class PersonMapper extends MySQLDataMapper implements PersonDataMapper
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
		function getById(Int $id) {
			$sql = "SELECT * FROM {$this->getTable()} WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $id);
			$statement->execute;
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if ($data) {
				return $this->getFactory()->create($data);
			}
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
