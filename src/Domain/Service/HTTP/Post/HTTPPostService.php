<?php

	namespace Domain\Service\HTTP\Post;

	use \Domain\Component\Repository;
	use Symfony\Component\HttpFoundation\Request;

	class HTTPPostService {
		private $repository;
		private $request;
		function __construct(Repository $repository, Request $request) {
			$this->repository = $repository;
			$this->request = $request;
		}
		function getRepository() {
			return $this->repository;
		}
		function getRequest() {
			return $this->request;
		}
		function getAllSortedByDateDecending() {

		}
		function writePost(Post $post, Account $account) {

		}
		function editPost(Post $post, Account $account = null) {

		}
		function writeComment(Comment $comment, Person $person, Post $post) {

		}
	}
