<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Post\Post;
	use \Domain\Aggregate\Post\Comment;
	use \Domain\Aggregate\Post\CommentCollection;

	class CommentMapper extends \Domain\Component\MySQLDataMapper
	{
		function insert(Comment $comment) {
				$sql = "INSERT INTO {$this->getTable()}
							  (authorPersonId, content, creationDate, postId)
								VALUES
								(:authorPersonId, :content, :creationDate, :postId)
								";
			$statement = $this->getConnection()->prepare($sql);
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
