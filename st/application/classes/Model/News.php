<?php defined('SYSPATH') or die('No direct script access.');
class Model_News extends Model
{
    public function get_all_news()
    {
        return DB::select()
            ->from('news')
            ->order_by('id', 'DESC')
            ->execute()
            ->as_array();
    }
    public function add_news($news)
    {
        $author = (isset($news['author'])) ? $news['author'] : 'admin';
        return DB::insert('news', array('title', 'description', 'content', 'author'))
            ->values(array($news['title'], $news['description'], $news['content'], $author))
            ->execute();
    }
    public function del_news($id)
    {
        return DB::delete('news')
            ->where('id', '=', $id)
            ->execute();
    }
    public function get_news($id)
    {
        return DB::select()
            ->from('news')
            ->where('id', '=', $id)
            ->execute()
            ->as_array();
    }
    public function update_news($news)
    {
        return DB::update('news')
            ->set(array('title'=>$news['title'], 'description'=>$news['description'], 'content'=>$news['content']))
            ->where('id', '=', $news['id'])
            ->execute();
    }
}