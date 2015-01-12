<?php
class NewsController extends Controller
{
    public function indexAction()
    {
        $this->view->render('news');
    }
    public function addAction()
    {
        if(isset($_POST['save_news']) && !empty($_POST['titleNews']) && !empty($_POST['contentNews'])){
            NewsModel::addNews($_POST['titleNews'], $_POST['contentNews']);
            $this->redirect(APP_BASE_URL . '?url=news/index');
        }
        $this->view->render('add_news');
    }
    public function delAction()
    {
        if(isset($_POST['delNews']) && !empty($_POST['checkDel'])){
            NewsModel::delNews($_POST['checkDel']);
            $this->redirect(APP_BASE_URL . '?url=news/del');
        }
        $this->view->render('del_news');
    }
}