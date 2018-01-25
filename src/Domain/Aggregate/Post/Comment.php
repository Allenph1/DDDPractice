<?php

	namespace Domain\Aggregate\Post;

	class Comment
	{
		private $id;
		private $authorPersonId;
		private $content;
		private $creationDate;
		function __construct(Int $id, Int $authorPersonId, DateTime $creationDate, String $content) {
			$this->id = $id;
			$this->setContent($content);
			$this->creationDate = $creationDate;
		}
		function getId() {
			return $this->id;
		}
		function getAuthor() {
			return $this->author;
		}
		function getCreationDate() {
			return $this->creationDate;
		}
		function setContent(String $content) {
			$this->content = $content;
		}
		function getContent() {
			return $this->content;
		}
	}
