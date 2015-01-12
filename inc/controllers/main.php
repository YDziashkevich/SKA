<?php
class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('main');
    }
    public function editAction()
    {
        if(isset($_POST['save_content'])){
            MainModel::updateContent($_POST['content_edit']);
            $this->redirect(APP_BASE_URL);
        }
        $this->view->render('edit_main');
    }
}