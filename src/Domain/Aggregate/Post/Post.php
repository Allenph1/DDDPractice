<?php

	namespace Domain\Aggregate;

	class Post
	{
		private $id;
		private $authorPersonId;
		private $content;
		private $postDate;
		private $comments;
		function __construct(Int $authorPersonId, String $content, DateTime $postDate, CommentCollection $comments) {
			$this->setauthorPersonId($authorPersonId);
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
		function setauthorPersonId(Int $authorPersonId) {
			$this->authorPersonId = $authorPersonId;
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
