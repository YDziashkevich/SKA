<div class="row">
    <form method="post">

        <?php foreach ($message as $value): ?>
            Заголовок:
            <textarea class="content_edit" name="title_edit" rows="2" wrap="virtual">
                <?php echo $value['title'] ?>
            </textarea>
            Текст:
            <textarea class="content_edit" name="content_edit" rows="15" wrap="virtual">
                <?php echo $value['content'] ?>
            </textarea>
        <?php endforeach; ?>

        <?php
        foreach($errors as $error){
            echo $error . '<br />';
        }
        echo '<br />';
        ?>

        <input class="btn btn-success" type="submit" name="save_content" value="Сохранить">
    </form>
</div>