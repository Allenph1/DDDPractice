<?php

	namespace Domain\Aggregate\Post\Comment;

	use \Domain\Aggregate\Post\Comment\Comment;

	class CommentCollection implements \Interface\Collection
	{
		private $comments = [];
		function __construct(Array $comments) {
			foreach($comments as $comment) {
				$this->addComment($comment);
			}
		}
		function add(Comment $comment) {
			$this->comments[] = $comment;
		}
		function returnAll() {
			return $this->comments;
		}
	}
