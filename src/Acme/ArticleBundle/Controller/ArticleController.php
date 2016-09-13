// src/Acme/ArticleBundle/Controller/ArticleController.php
class ArticleController extends Controller
{
    public function recentArticlesAction($max = 3)
    {
        // hace una llamada a la base de datos u otra lógica
        // para obtener los "$max" artículos más recientes
        $articles = ...;
 
        return $this->render(
            'AcmeArticleBundle:Article:recentList.html.twig',
            array('articles' => $articles)
        );
    }
}