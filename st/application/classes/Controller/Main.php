<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Common {

	public function action_index()
	{
        $messages = Model::factory('Main')->get_all_messages();
        $content = View::factory('main/show')->bind('messages', $messages);
		$this->template->content = $content;
	}
    public function action_edit()
    {
        $id = $this->request->param('id');
        $_POST = Arr::map('trim', $_POST);
        $title = trim(Arr::get($_POST, 'title_edit', ''));
        $text = trim(Arr::get($_POST, 'content_edit', ''));
        if($_POST){
            $post = Validation::factory($_POST);
            $post
                ->rule('title_edit', 'not_empty')
                ->rule('title_edit', 'min_length', array(':value', 3))
                ->rule('content_edit', 'not_empty')
                ->rule('content_edit', 'min_length', array(':value', 50));
            if($post->check()){
                Model::factory('Main')->update_message(array('id'=>$id, 'title'=>$title, 'content'=>$text));
                $this->redirect('main/');
            }else{
                $errors = $post->errors('messages');
            }
        }
        $errors = isset($errors) ? $errors : array('');
        $message = Model::factory('Main')->get_message($id);
        $content = View::factory('main/edit')->bind('message', $message)->bind('errors', $errors);
        $this->template->content = $content;
    }
    public function action_del()
    {
        $id = $this->request->param('id');
        if(Model::factory('Main')->del_message($id)){
            $this->redirect('main/');
        }
    }
    public function action_add()
    {
        $_POST = Arr::map('trim', $_POST);
        if($_POST){
            $title = trim($_POST['title_add']);
            $text = trim($_POST['content_add']);
            $post = Validation::factory($_POST);
            $post
                ->rule('title_add', 'not_empty')
                ->rule('title_add', 'min_length', array(':value', 3))
                ->rule('content_add', 'not_empty')
                ->rule('content_add', 'min_length', array(':value', 50));
            if($post->check()){
                Model::factory('Main')->add_message($title, $text);
                $this->redirect('main/');
            }else{
                $errors = $post->errors('messages');
            }
        }
        $errors = isset($errors) ? $errors : array('');
        $content = View::factory('main/add')->bind('title', $title)->bind('text', $text)->bind('errors', $errors);
        $this->template->content = $content;
    }

} // End Main
