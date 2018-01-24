<?php

	namespace Domain\Aggregate\Post;

	class Comment
	{
		private $id;
		private $authorUserId;
		private $postDate;
		private $content;
		function __construct(Int $authorUserId, DateTime $postDate, String $content) {
			$this->setauthorUserId($author);
			$this->setPostDate($postDate);
			$this->setContent($content);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
		function setauthorUserId(Int $authorUserId) {
			$this->authorUserId = $authorUserId;
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
