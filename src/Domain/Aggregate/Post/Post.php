<?php

	namespace Domain\Aggregate;

	class Post
	{
		private $id;
		private $authorUserId;
		private $content;
		private $postDate;
		private $comments;
		function __construct(Int $authorUserId, String $content, DateTime $postDate, CommentCollection $comments) {
			$this->setAuthorUserId($authorUserId);
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
		function setAuthorUserId(Int $authorUserId) {
			$this->authorUserId = $authorUserId;
		}
		function getauthorUserId() {
			return $this->authorUserId;
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
