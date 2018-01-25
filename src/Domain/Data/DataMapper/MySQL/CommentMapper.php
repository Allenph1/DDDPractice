<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Comment\Comment;

	class CommentMapper extends \Domain\Component\MySQLDataMapper
	{
		function insert(Post $post) {
			$sql = "INSERT INTO {$this->getTable()}
						  (id, authorPersonId, content, creationDate, postId)
							VALUES
							(:id, :authorPersonId, :content, :creationDate, :postId)
							";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $comment->getId());
			$statement->bindValue(":authorPersonId", $comment->getAuthorPersonId());
			$statement->bindValue(":content", $comment->getContent());
			$statement->bindValue(":creationDate", $comment->getCreationDate());
			$statement->bindValue(":postId", $comment->getPostId());
			$statement->execute();
		}
		function update() {
			$sql = "UPDATE {$this->getTable()}
							SET authorPersonId = :authorPersonId,
									content = :content,
									creationDate = :creationDate,
									postId = :postId
							WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":authorPersonId", $comment->getAuthorPersonId());
			$statement->bindValue(":content", $comment->getContent());
			$statement->bindValue(":creationDate", $comment->getCreationDate());
			$statement->bindValue(":postId", $comment->getPostId());
			$statement->execute();
		}
		function getByPost(Post $post, CommentCollection $commentCollection) {
			$sql = "SELECT * FROM " . $this->getTable() . "WHERE postId = :id";
			$statement = $this->connection->prepare($sql);
			$statement->bindValue(':id', $post->getId());
			$statement->execute();
			$data = $statement->fetch(\PDO::FETCH_ASSOC);
			if ($data) {
				foreach($data as $entityData) {
					$this->mergeData();
				}
			}
		}
		function deleteById(Comment $comment) {
			$sql = "DELETE FROM {$this->getTable()} WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $comment->getId());
			$statement->execute();
		}
	}
