<?php

  namespace Domain\Data\Repository;

  use \Domain\Component\Repository;

  class CommentRepository extends Repository
  {
    function getByPostId(Int $postId) {
      $commentCollection = $this->factory->createCollection(
        $this->dataMapper->getByPostId($postId)
      );
      foreach($commentCollection as $comment) {
        $this->idCache[$comment->id] = $comment;
      }
      return $commentCollection;
    }
    function update(Comment $comment) {
      $this->dataMapper->update($comment);
    }
    function deleteById(Comment $comment) {
      $this->dataMapper->deleteById($comment);
    }
  }
