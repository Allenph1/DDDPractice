<?php

  global $injector;
  global $request;

  $injector->define("Domain\Service\HTTP\Post\HTTPPostService",
    ["Domain\Component\Repository" => "Domain\Component\Repository\PostRepository",
     ":Symfony\Component\HttpFoundation\Request" => $request]
  );
