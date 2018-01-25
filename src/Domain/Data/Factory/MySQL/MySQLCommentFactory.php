<?php

	namespace Domain\Data\Factory\MySQL;

	use Domain\Aggregate\Comment\Comment;
	use Domain\Interface\CollectionFactory;
	use Domain\Interface\Factory;

	class MySQLPostFactory implements Factory, CollectionFactory {
    private $id;
		private $authorPersonId;
		private $content;
		private $creationDate;
		function create(Array $row) {
			return new Comment(
				(Int) $row['id'],
				(Int) $row['authorPersonId'],
				(String) $row['content'],
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
