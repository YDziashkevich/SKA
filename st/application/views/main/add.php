<div class="row">
    <form method="post">
        <h3 style="text-align: center">Добавить сообщение</h3>

        Заголовок:
            <textarea class="content_edit" name="title_add" rows="2" wrap="virtual">

            </textarea>
        Текст:
            <textarea class="content_edit" name="content_add" rows="15" wrap="virtual">

            </textarea>

        <?php
        foreach($errors as $error){
            echo $error . '<br />';
        }
        echo '<br />';
        ?>

        <input class="btn btn-success" type="submit" name="add_content" value="Сохранить">
    </form>
</div>