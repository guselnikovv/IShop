<h1>Hello, world!</h1>
<p><?= $name; ?></p>
<p><?= $age; ?></p>
<?php debug($users); ?>

<?php
foreach ($posts as $post) {
  echo "<p>" . $post->title . "</p>";
}
