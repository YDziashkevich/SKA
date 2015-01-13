<?php

/**
 * Class MainModel модель главной страницы
 */
class MainModel extends Model
{
    /**
     * @return string содержание главной страницы
     */
    public static function getContent()
    {
        $content = self::getDbc()->query('SELECT content FROM ' . APP_DB_PREFIX . 'main');
        return $content->fetchColumn();
    }
    /**
     * @param $content содержание главной страницы
     * @param int $id id содержания
     * @return bool результат обновления содержания
     */
    public static function updateContent($content, $id = 1)
    {
        $update = self::getDbc()->prepare('UPDATE ' . APP_DB_PREFIX . 'main SET content=:content WHERE id=:id');
        return $update->execute(array(':content' => $content, ':id' => (int)$id));
    }
}