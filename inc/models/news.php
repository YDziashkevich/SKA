<?php
class NewsModel extends Model
{
    public static function addNews($title, $content)
    {
        $news = self::getDbc()->prepare('INSERT INTO ' . APP_DB_PREFIX . 'news (title, content) VALUES (:title, :content)');
        return $news->execute(array(':title' => $title, ':content' => $content));
    }
    public static function getAllNews()
    {
        $news = self::getDbc()->query('SELECT * FROM st_news');
        return $news->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function delNews($id)
    {
        $news = self::getDbc()->prepare('DELETE FROM st_news WHERE id=:id');
        return $news->execute(array(':id' => (int)$id));
    }
}