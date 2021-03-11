<?php

$images = include __DIR__ . '/send.php';

foreach ($images as $id => $value) { ?>
    <a href="/image.php?id=<?php echo $id; ?>"><img src="<?php echo $value; ?>"></a>

<?php }
?>
