<?php

  namespace Domain\Interface\Data\DataMapper;

  interface CommentDataMapper {
    function insert(Comment $comment) {}
    function getByPostId(Int $id){};
    function update(Comment $comment) {}
    function deleteById(Comment $comment) {}
  }
