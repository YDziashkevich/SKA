<?php

/**
 * Class GalleryModel модель галереи
 */
class GalleryModel extends Model
{
    /**
     * @param array $image параметры изображения
     * @return bool результат сохранения изображения
     */
    public static function addImage($image = array())
    {
        $validation = false;
        switch($image['type']){
            case 'image/gif':
            case 'image/jpeg':
            case 'image/pjpeg':
            case 'image/png':
            case 'image/jpg':
                $validation = true;
                break;
            default:
                break;
        }
        if($validation && ((int)$image['size'] < 200000) && !self::getImage($image['upFile'])){
            if(move_uploaded_file($_FILES['userImage']['tmp_name'],$image['upFile'])){
                self::saveImage($image['upFile']);
                return true;
            }
        }else{
            return false;
        }
    }

    /**
     * @param $src путь к изображению
     * @return bool результат сохранения изображения в БД
     */
    private static function saveImage($src)
    {
        $image = self::getDbc()->prepare('INSERT INTO ' . APP_DB_PREFIX . 'gallery (src) VALUE (:src)');
        return $image->execute(array(':src' => $src));
    }

    /**
     * @return array список всех изображений в БД
     */
    public static function getImages()
    {
        $images = self::getDbc()->query('SELECT src FROM ' . APP_DB_PREFIX . 'gallery');
        return $images->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $src путь к изображению
     * @return string результат поиска изображения по схожему пути
     */
    private static function getImage($src)
    {
        $image = self::getDbc()->prepare('SELECT src FROM st_gallery WHERE src=:src');
        $image->execute(array('src' => $src));
        return $image->fetchColumn();
    }
}