<div class="row">
    <form method="post">
        <h3 style="text-align: center">Добавить сообщение</h3>

        <?php foreach ($news as $value): ?>
        Заголовок:
            <textarea class="content_edit" name="title_edit" rows="2" wrap="virtual">
                <?php echo $value['title'] ?>
            </textarea>
        Краткое содержание:
        <textarea class="content_edit" name="description_edit" rows="3" wrap="virtual">
                <?php echo $value['description'] ?>
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

        <input class="btn btn-success" type="submit" name="add_content" value="Сохранить">
    </form>
</div>