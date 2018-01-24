<?php

	namespace Domain\Data\DataMapper\MySQL;

	use \Domain\Aggregate\Post\Post;
	use \Domain\Aggregate\Post\Comment;
	use \Domain\Collection\Post\CommentCollection;

	class CommentMapper extends \Domain\Component\MySQLDataMapper
	{
		function store(Comment $comment) {
			if (is_int($comment->$comment->id)) {
				$sql = "
				INSERT INTO `" . $this->getTable() . "`
				(`authorId`, `content`, `postDate`, `postId`)
				VALUES
				(" . $comment->getAuthorPersonId() . ", " . $comment->getContent() . ", " . $comment->getCreationDate() . ", " . $comment->getPostId() . )";
			}
			$sql =
		}
		function getByPost(Post $post) {
			$sql = "SELECT * FROM " . $this->getTable() . "WHERE postId = :id";
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
