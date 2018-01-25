<?php

	namespace HTTP\Controller\Post;

  use \HTTP\Interfaces\Controller;
  use \Domain\Service\Post\HTTP\PostService;
  use Symfony\Component\HttpFoundation\Request;

	class PostController implements Controller {
		function front(Request $request) {
			$repository = new
      if ($_SERVER['REQUEST_URI'] == "/post" && $_SERVER["REQUEST_METHOD"] == "POST") {
        $this->writePost($request);
      }
    }
    function writePost(Request $request, $repository) {
      $postService = new PostService($repository)->writePost(
				new Domain\Data\Repository\PostRepository(
					new Domain\Data\DataMapper\MySQL\PostMapper(
						new PDO,
						"post",
						new Domain\Data\Factory\MySQL()
					)
				)
			);
    }
	}
