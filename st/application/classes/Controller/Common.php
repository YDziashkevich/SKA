<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_Common extends Controller_Template
{
    public $template = 'template';
    public function before()
    {
        parent::before();
        $st_config = Kohana::$config->load('st_config');
        View::set_global('title', $st_config->get('title'));
        View::set_global('description', $st_config->get('description'));
        $this->template->styles = array('main', 'bootstrap', 'news');
        $this->template->scripts = array('bootstrap', 'jquery', 'bootstrap-collapse');
    }
}//end common