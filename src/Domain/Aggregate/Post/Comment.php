<?php

	namespace Domain\Aggregate\Post;

	class Comment
	{
		private $id;
		private $authorPersonId;
		private $postDate;
		private $content;
		function __construct(Int $authorPersonId, DateTime $postDate, String $content) {
			$this->setauthorPersonId($author);
			$this->setPostDate($postDate);
			$this->setContent($content);
		}
		function setId(Int $id) {
			$this->id = $id;
		}
		function getId() {
			return $this->id;
		}
		function setauthorPersonId(Int $authorPersonId) {
			$this->authorPersonId = $authorPersonId;
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
