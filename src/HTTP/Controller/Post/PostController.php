<?php

	namespace HTTP\Controller\Post;

  use \HTTP\Interfaces\Controller;
  use \Domain\Service\Post\HTTP\PostService;
	use Domain\Component\Repository;
  use Symfony\Component\HttpFoundation\Request;

	class PostController implements Controller {
		function front(PostService $postService) {
			$this->postService = $postService;
      if ($_SERVER['REQUEST_URI'] == "/post" && $_SERVER["REQUEST_METHOD"] == "POST") {
        $this->writePost($postService);
      }
    }
    function writePost($postService) {
			var_dump($postService);
			die;
      $postService = new PostService($repository)->writePost(
				new Domain\Data\Repository\PostRepository(
					new Domain\Data\DataMapper\MySQL\PostMapper(
						new PDO,
						"post",
						new Domain\Data\Factory\MySQLPostFactory()
					)
				)
			);
    }
	}
