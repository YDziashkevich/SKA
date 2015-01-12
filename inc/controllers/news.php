<?php
class NewsController extends Controller
{
    public function indexAction()
    {
        $this->view->render('news');
    }
}