<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $postId = $_GET['id'];
  $url = 'https://jsonplaceholder.typicode.com/posts/' . $postId;
  $comments_url = $url . '/comments';
  $post = json_decode(file_get_contents($url), true);
  $comments = json_decode(file_get_contents($comments_url), true);

  echo '<h2>' . $post['title'] . '</h2>';
  echo '<p>' . $post['body'] . '</p>';
  echo '<p>Author: ' . $post['userId'] . '</p>';
  foreach ($comments as $comment) {
    echo '<p>Comment: ' . $comment['body'] . '</p>';
    echo '<p>Author: ' . $comment['name'] . '</p>';
    echo '<hr>';
  }
    
} else {
  echo 'Invalid post ID.';
}
?>
