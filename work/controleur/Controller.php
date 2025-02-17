<?php
	// require_once 'modele/dao/ArticleDao.php';
	// require_once 'modele/dao/CategorieDao.php';
	require_once 'modele/Article.php';
	require_once 'modele/Categorie.php';
	require_once 'modele/ConnexionManager.php';

	/**
	 * Classe représentant notre controleur principal
	 */
	class Controller
	{
		
		

		public function showAccueil()
		{
			$articles = Article::getList();
			$categories = Categorie::getList();

			require_once 'vue/accueil.php';
		}

		public function showArticle($id)
		{
			$article = Article::getById($id);
			$categories = Categorie::getList();
			
			require_once 'vue/article.php';
		}

		public function showCategorie($id)
		{
			$articles = Article::getByCategoryId($id);
			$categories = Categorie::getList();
			
			require_once 'vue/articleByCategorie.php';
		}
	}
?>