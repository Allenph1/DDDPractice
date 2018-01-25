<?php

  namespace Domain\Interface\Data\DataMapper;

  interface PostDataMapper {
    function insert(Post $post) {}
    function getAllSortedByDateDecending() {}
    function update(Post $post) {}
    function deleteById(Post $post) {}
  }
