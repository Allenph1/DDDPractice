<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Post\Post;
	use \Domain\Component\MySQLDataMapper;
	use \Domain\Interface\Data\DataMapper\PostDataMapper;

	class PostMapper extends MySQLDataMapper implements PostDataMapper
	{
		function insert(Post $post) {
			$sql = "INSERT INTO {$this->getTable()}
						  (id, authorPersonId, content, creationDate)
							VALUES
							(:id, :authorPersonId, :content, :creationDate)
							";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $post->getId());
			$statement->bindValue(":authorPersonId", $post->getAuthorPersonId());
			$statement->bindValue(":content", $post->getContent());
			$statement->bindValue(":creationDate", $post->getCreationDate());
			$statement->execute();
		}
		function getAllSortedByDateDecending() {
			$sql = "SELECT * FROM {$this->getTable()}";
			$statement = $this->getConnection()->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if ($data) {
				return $this->getFactory()->createCollection($data);
			}
		};
		function update(Post $post) {
			$sql = "UPDATE {$this->getTable()}
							SET authorPersonId = :authorPersonId,
									content = :content,
									creationDate = :creationDate
							WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":authorPersonId", $post->getAuthorPersonId());
			$statement->bindValue(":content", $post->getContent());
			$statement->bindValue(":creationDate", $post->getCreationDate());
			$statement->bindValue(":postId", $post->getPostId());
			$statement->bindValue(":id", $post->getId());
			$statement->execute();
		}
		function deleteById(Post $post) {
			$sql = "DELETE FROM {$this->getTable()} WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $post->getId());
			$statement->execute();
		}
	}
