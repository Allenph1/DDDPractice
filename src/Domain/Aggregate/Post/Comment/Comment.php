<?php

	namespace Domain\Aggregate\Post\Comment;

	class Comment
	{
		private $id;
		private $authorId;
		private $postDate;
		private $content;
		function __construct(Int $authorId, DateTime $postDate, String $content) {
			$this->setAuthorId($author);
			$this->setPostDate($postDate);
			$this->setContent($content);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
		function setAuthorId(Int $authorId) {
			$this->authorId = $authorId;
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
