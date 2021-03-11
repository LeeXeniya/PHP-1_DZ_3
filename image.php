<?php

$images = include __DIR__ . '/send.php';

if(isset($_GET['id'])): ?>
<img src="<?php echo $images[$_GET['id']]; ?>">
<?php endif;
