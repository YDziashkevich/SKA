<?php
class MainModel extends Model
{
    public static function getContent()
    {
        $content = self::getDbc()->query('SELECT content FROM ' . APP_DB_PREFIX . 'main');
        return $content->fetchColumn();
    }
    public static function updateContent($content, $id = 1)
    {
        $update = self::getDbc()->prepare('UPDATE st_main SET content=:content WHERE id=:id');
        return $update->execute(array(':content' => $content, ':id' => (int)$id));
    }
}