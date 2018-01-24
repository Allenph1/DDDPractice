<?php

	namespace Domain\Aggregate;

	class Post
	{
		private $id;
		private $authorId;
		private $content;
		private $postDate;
		private $comments;
		function __construct(Int $authorId, String $content, DateTime $postDate, CommentCollection $comments) {
			$this->setAuthorId($authorId);
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
		function setAuthor(Int $authorId) {
			$this->authorId = $authorId;
		}
		function getAuthorId() {
			return $this->authorId;
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