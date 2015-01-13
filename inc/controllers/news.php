<?php

/**
 * Class NewsController контроллер страницы новостей
 */
class NewsController extends Controller
{
    /**
     * отображение главной страницы новастей
     */
    public function indexAction()
    {
        $this->view->render('news');
    }

    /**
     * отображение страницы добавления новости
     */
    public function addAction()
    {
        if(isset($_POST['save_news']) && !empty($_POST['titleNews']) && !empty($_POST['contentNews'])){
            NewsModel::addNews($_POST['titleNews'], $_POST['contentNews']);
            $this->redirect(APP_BASE_URL . '?url=news/index');
        }
        $this->view->render('add_news');
    }

    /**
     * отображение страницы удаления новостей
     */
    public function delAction()
    {
        if(isset($_POST['delNews']) && !empty($_POST['checkDel'])){
            NewsModel::delNews($_POST['checkDel']);
            $this->redirect(APP_BASE_URL . '?url=news/del');
        }
        $this->view->render('del_news');
    }
    /**
     * @param $news id запрашиваемой новости
     */
    public function readAction($news)
    {
        $this->view->render('read_news', array('news' => $news));
    }

    /**
     * @param $text текст новости
     * @return array|string краткий текст новоти
     */
    public static function trimText($text){
        $part = explode('. ', $text);
        $part = array_slice($part, 0, (count($part)-1));
        $part = implode('. ', $part);
        return $part;
    }
}