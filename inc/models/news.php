<?php

/**
 * Class NewsModel модель строки новостей
 */
class NewsModel extends Model
{
    /**
     * @param $title заголовок новости
     * @param $content содержание новости
     * @return bool результат сохранения новости
     */
    public static function addNews($title, $content)
    {
        $news = self::getDbc()->prepare('INSERT INTO ' . APP_DB_PREFIX . 'news (title, content) VALUES (:title, :content)');
        return $news->execute(array(':title' => $title, ':content' => $content));
    }

    /**
     * @return array список всех новостей
     */
    public static function getAllNews()
    {
        $news = self::getDbc()->query('SELECT * FROM ' . APP_DB_PREFIX . 'news');
        return $news->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id id новости
     * @return bool результат удаления новости
     */
    public static function delNews($id)
    {
        $news = self::getDbc()->prepare('DELETE FROM ' . APP_DB_PREFIX .'news WHERE id=:id');
        return $news->execute(array(':id' => (int)$id));
    }

    /**
     * @param $id id новости
     * @return mixed содержание новости
     */
    public static function getNews($id)
    {
        $news = self::getDbc()->prepare('SELECT title, content FROM ' . APP_DB_PREFIX . 'news WHERE id=:id');
        $news->execute(array(':id' => (int)$id));
        return $news->fetch(PDO::FETCH_ASSOC);
    }
}