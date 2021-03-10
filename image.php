<?php

$images = [
  1 => 'cat.jpg',
  2 => 'dog.jpg',
  3 => 'tiger.jpg',
];

if(isset($_GET['id'])): ?>
<img src="<?php echo $images[$_GET['id']];?>">
<?php endif;
return $images;
