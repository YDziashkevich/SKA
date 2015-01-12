<?php
class GalleryController extends Controller
{
    public function indexAction()
    {
        $this->view->render('gallery');
    }
}