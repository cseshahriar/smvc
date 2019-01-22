<?php require_once APPROOT.'/views/inc/header.php'; ?> 	
	<?php foreach ($data['posts'] as $post) : ?>
		<ul>
			<li><?= $post->title ?></li>
			<li><?= $post->body ?></li>     
		</ul>
	<?php endforeach; ?>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>   