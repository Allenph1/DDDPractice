<?php

	namespace Domain\Aggregate;

	class Post
	{
		private $id;
		private $author;
		private $content;
		private $postDate;
		private $comments;
		function __construct(User $author, String $content, DateTime $postDate, CommentCollection $comments) {
			$this->setAuthor($author);
			$this->setContent($content);
			$this->setDate($postDate);
			$this->setComments($comments);
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
		function setContent(String $content) {
			$this->content = $content;
		}
		function getContent() {
			return $this->content;
		}
		function setPostDate(DateTime $postDate) {
			$this->postDate = $postDate;
		}
		function getPostDate() {
			return $this->postDate;
		}
		function setComments(CommentCollection $comments) {
			$this->comments = $comments;
		}
		function getComments() {
			return $this->comments;
		}
	}
