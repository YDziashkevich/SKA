<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Common
{
    public function action_index()
    {
        $news = Model::factory('News')->get_all_news();
        $content = View::factory('news/show')->bind('news', $news);
        $this->template->content = $content;
    }
    public function action_add()
    {
        $_POST = Arr::map('trim', $_POST);
        if($_POST){
            $title = trim($_POST['title_add']);
            $text = trim($_POST['content_add']);
            $description = trim($_POST['description_add']);
            $post = Validation::factory($_POST);
            $post
                ->rule('title_add', 'not_empty')
                ->rule('title_add', 'min_length', array(':value', 3))
                ->rule('content_add', 'not_empty')
                ->rule('content_add', 'min_length', array(':value', 50))
                ->rule('description_add', 'not_empty')
                ->rule('content_description', 'min_length', array(':value', 20));
            if($post->check()){
                Model::factory('News')->add_news(array('title' => $title, 'description' => $description, 'content' => $text));
                $this->redirect('news/');
            }else{
                $errors = $post->errors('news');
            }
        }
        $errors = isset($errors) ? $errors : array('');
        $content = View::factory('news/add')->bind('errors', $errors);
        $this->template->content = $content;
    }
    public function action_del()
    {
        $id = $this->request->param('id');
        if(Model::factory('News')->del_news($id)){
            $this->redirect('news/');
        }
    }
    public function action_edit()
    {
        $id = $this->request->param('id');
        $_POST = Arr::map('trim', $_POST);
        $title = trim(Arr::get($_POST, 'title_edit', ''));
        $text = trim(Arr::get($_POST, 'content_edit', ''));
        $description = trim(Arr::get($_POST, 'description_edit', ''));
        if($_POST){
            $post = Validation::factory($_POST);
            $post
                ->rule('title_edit', 'not_empty')
                ->rule('title_edit', 'min_length', array(':value', 3))
                ->rule('content_edit', 'not_empty')
                ->rule('content_edit', 'min_length', array(':value', 50))
                ->rule('description_edit', 'not_empty')
                ->rule('description_edit', 'min_length', array(':value', 20));
            if($post->check()){
                Model::factory('News')->update_news(array('id'=>$id, 'title'=>$title, 'content'=>$text, 'description'=>$description));
                $this->redirect('news/');
            }else{
                $errors = $post->errors('news');
            }
        }
        $errors = isset($errors) ? $errors : array('');
        $news = Model::factory('news')->get_news($id);
        $content = View::factory('news/edit')->bind('news', $news)->bind('errors', $errors);
        $this->template->content = $content;
    }
}//End News