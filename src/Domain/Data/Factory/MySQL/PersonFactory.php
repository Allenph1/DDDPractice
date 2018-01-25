<?php

	namespace Domain\Data\Factory\MySQL;

	use Domain\Aggregate\Post\Post;
	use Domain\Interface\CollectionFactory;
	use Domain\Interface\Factory;
	class MySQLPostFactory implements Factory, CollectionFactory {
		function create(Array $row) {
			return new Post(
				(Int) $row['id'],
				(String) $row['firstName'],
				(String) $row['lastName'],
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
