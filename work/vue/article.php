<!DOCTYPE html>
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<!--<h1>Actualités du Sénégal</h1>-->
<html>
<head>
	<meta charset="utf-8">
	<title>Affichage d'un article</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>
<body>
	<?php require_once 'inc/entete.php'; ?>
	<?php if (!empty($article)): ?>
		<div id="contenu" class="">
			<h1><?= $article->titre ?></h1>
			<span class="publi">Publié le <?= $article->dateCreation ?></span>
			<p><?= $article->contenu ?></p>
		</div>
	<?php else: ?>
		<div class="message">L'article demandé n'existe pas</div>
	<?php endif ?>
	<?php require_once 'inc/menu.php';  ?>
</body>
</html>