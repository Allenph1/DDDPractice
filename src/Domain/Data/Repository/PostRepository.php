<?php

  namespace Domain\Data\Repository;

  use \Domain\Component\Repository;

  class PostRepository extends Repository
  {
    function getAllSortedByDateDecending() {
      $posts = $this->factory->createCollection(
        $this->dataMapper->getAllSortedByDateDecending($id)
      );
      foreach($posts as $post) {
        $this->idCache[$post->id] = $post;
      }
      return $posts;
    }
    function update(Post $post) {
      $this->dataMapper->update($post);
    }
    function deleteById(Post $post) {
      $this->dataMapper->deleteById($post);
    }
  }
