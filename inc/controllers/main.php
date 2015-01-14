<?php

/**
 * Class MainController контроллер главной страницы
 */
class MainController extends Controller
{
    /**
     * отображение главной страницы
     */
    public function indexAction()
    {
        $this->view->render('main/main');
    }

    /**
     *отображение страницы для редактиравния главной страницы
     */
    public function editAction()
    {
        if(isset($_POST['save_content'])){
            MainModel::updateContent($_POST['content_edit']);
            $this->redirect(APP_BASE_URL);
        }
        $this->view->render('main/edit_main');
    }
}