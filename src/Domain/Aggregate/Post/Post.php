<?php

	namespace Domain\Aggregate;

	class Post
	{
		private $id;
		private $authorPersonId;
		private $content;
		private $creationDate;
		private $comments;
		function __construct(Int $id, Int $authorPersonId, String $content, DateTime $creationDate, CommentCollection $comments) {
			$this->id = $id;
			$this->setauthorPersonId($authorPersonId);
			$this->setContent($content);
			$this->setComments($comments);
			$this->creationDate = $creationDate;
		}
		function getId() {
			return $this->id;
		}
		function getauthorPersonId() {
			return $this->authorPersonId;
		}
		function setContent(String $content) {
			$this->content = $content;
		}
		function getContent() {
			return $this->content;
		}
		function getCreationDate() {
			return $this->creationDate;
		}
		function getComments() {
			return $this->comments;
		}
	}
