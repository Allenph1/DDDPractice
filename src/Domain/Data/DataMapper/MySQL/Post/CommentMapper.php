<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Post;
	use \Domain\Entity\Post\Comment;
	use \Domain\Collection\Post\CommentCollection;

	class CommentMapper extends \Domain\Component\MySQLDataMapper
	{
		function create(Comment $comment) {

		}
		function getByPost(Post $post) {
			$sql = "SELECT * WHERE postId = :id";
			$statement = $this->connection->prepare($sql);
			$statement->bindValue(':id', $post->getId());
			$statement->execute();
			$data = $statement->fetch(\PDO::FETCH_ASSOC);
			if ($data) {
				foreach($data as $entityData) {

				}
			}
		}
		function delete(Comment $comment) {

		}
	}
