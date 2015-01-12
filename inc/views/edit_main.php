<form method="post">
    <textarea class="content_edit" name="content_edit" rows="20" wrap="virtual">
        <?php echo MainModel::getContent(); ?>
    </textarea>
    <input class="btn btn-success" type="submit" name="save_content" value="Сохранить">
    </form>