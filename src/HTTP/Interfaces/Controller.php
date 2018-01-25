<?php

  namespace HTTP\Interfaces;

  use Symfony\Component\HttpFoundation\Request;

  interface Controller {
    function front(Request $request) {}
  }
