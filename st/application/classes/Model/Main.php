<?php defined('SYSPATH') or die('No direct script access.');
class Model_Main extends Model
{
    public function get_all_messages()
    {
        return DB::select()
            ->from('main')
            ->order_by('id', 'DESC')
            ->execute()
            ->as_array();
    }
    public function get_message($id)
    {
        return DB::select()
            ->from('main')
            ->where('id', '=', $id)
            ->execute()
            ->as_array();
    }
    public function del_message($id)
    {
        return DB::delete('main')
            ->where('id', '=', $id)
            ->execute();
    }
    public function add_message($title, $content)
    {
        return DB::insert('main', array('title', 'content'))
            ->values(array($title, $content))
            ->execute();
    }
    public function update_message($message)
    {
        return DB::update('main')
            ->set(array('title'=>$message['title'], 'content'=>$message['content']))
            ->where('id', '=', $message['id'])
            ->execute();
    }
}