<?php

/**
 * Class GalleryController контроллер галереи
 */
class GalleryController extends Controller
{
    /**
     * @param string $page номер страницы галереи
     */
    public function indexAction($page = '')
    {
        if(isset($_POST['addImage'])){
            $upDir = './img/';
            $upFile = $upDir . basename($_FILES['userImage']['name']);
            $typeImage = $_FILES['userImage']['type'];
            $sizeFile = $_FILES['userImage']['size'];
            $image = array('type' => $typeImage, 'size' => $sizeFile, 'upFile' => $upFile);
            GalleryModel::addImage($image);
            $this->redirect(APP_BASE_URL . '?url=gallery/index');
        }
        $this->view->render('gallery/gallery', array('page' => $page));
    }
}