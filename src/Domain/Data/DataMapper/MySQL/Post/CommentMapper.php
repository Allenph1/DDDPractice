<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Post;
	use \Domain\Entity\Post\Comment;
	use \Domain\Collection\Post\CommentCollection;

	private function fetchById(Entity\Identity $entity)
     {
         $sql = "SELECT identity_id      AS id,
                        parent_id        AS parentId,
                        account_id       AS accountId,
                        status           AS status,
                        hash             AS hash,
                        token_expires_on AS tokenEndOfLife
                   FROM {$this->table}
                  WHERE identity_id = :id";
         $statement = $this->connection->prepare($sql);
         $statement->bindValue(':id', $entity->getId());
         $statement->execute();
         $data = $statement->fetch(PDO::FETCH_ASSOC);
         if ($data) {
             $this->applyValues($entity, $data);
         }



	class CommentMapper extends \Domain\Component\MySQLDataMapper
	{
		function create(Comment $comment) {

		}
		function getByPost(Post $post) {
			$sql = "SELECT * WHERE postId = :id";
			$statement = $this->connection->prepare($sql);
			$statement->bindValue(':id', $post->getId());
			$this->getConnection();
		}
		function delete(Comment $comment) {

		}
	}
