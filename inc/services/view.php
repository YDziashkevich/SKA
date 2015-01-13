<?php

/**
 * Class View сервисный класс для отображения
 */
class View
{
    public function render($name, $data = array()){
        if(!empty($data)){
            extract($data);
        }
        require('inc/views/header.php');
        require('inc/views/' . $name . '.php');
        require('inc/views/footer.php');
    }
}