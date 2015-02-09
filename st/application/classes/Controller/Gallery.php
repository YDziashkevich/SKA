<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Gallery extends Controller_Common
{
    public function action_index()
    {
        $content = View::factory('gallery/show');
        $this->template->content = $content;
    }
}//End content