<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Comment\Comment;

	class CommentMapper extends \Domain\Component\MySQLDataMapper
	{
		function insert(Comment $comment) {
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
		function getByPostId(Int $postId) {
			$sql = "SELECT * FROM {$this->getTable()} WHERE postId = :postId";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":postId", $postId);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if ($data) {

			}
		}
		function update(Comment $comment) {
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
			$statement->bindValue(":id", $comment->getId());
			$statement->execute();
		}
		function deleteById(Comment $comment) {
			$sql = "DELETE FROM {$this->getTable()} WHERE id = :id";
			$statement = $this->getConnection()->prepare($sql);
			$statement->bindValue(":id", $comment->getId());
			$statement->execute();
		}
	}
