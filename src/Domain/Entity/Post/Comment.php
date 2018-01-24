<?php

	namespace Domain\Entity\Post;

	use \Domain\Aggregate\User;

	class Comment
	{
		private $id;
		private $author;
		private $postDate;
		private $content;
		function __construct(User $author, DateTime $postDate, String $content) {
			$this->setAuthor($author);
			$this->setPostDate($postDate);
			$this->setContent($content);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
		function setAuthor(User $author) {
			$this->author = $author;
		}
		function getAuthor() {
			return $this->author;
		}
		function setPostDate(DateTime $postDate) {
			$this->postDate = $postDate;
		}
		function getPostDate() {
			return $this->postDate;
		}
		function setContent(String $content) {
			$this->content = $content;
		}
		function getContent() {
			return $this->content;
		}
	}
