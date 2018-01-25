<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Post\Post;

	class PostMapper extends \Domain\Component\MySQLDataMapper
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
