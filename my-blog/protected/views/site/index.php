<?php
require_once 'ApiHandler.php';
require_once 'DateHandler.php';

$posts = ApiHandler::getPostsFromApi('https://jsonplaceholder.typicode.com/posts');
$mostRecentPosts = array_slice($posts, 0, 6);
$chunks = array_chunk($mostRecentPosts, ceil(count($mostRecentPosts) / 2));

echo '<h1>Postagens Recentes</h1>';
echo '<div style="display: flex;">';

foreach ($chunks as $columnPosts) {
  echo '<div style="flex: 1; margin: 10px;">';

  foreach ($columnPosts as $post) {
    echo '<h2>' . $post['title'] . '</h2>';
    echo '<p>' . substr($post['body'], 0, 100) . '...</p>';
    echo '<p>Author: ' . $post['userId'] . '</p>';
    echo '<p>Data: ' . DateHandler::generateRandomDate() . '</p>';
    echo '<p><a href="protected/views/site/pages/view_post.php?id=' . $post['id'] . '">Read more</a></p>';
  }

  echo '</div>';
}

echo '</div>';
