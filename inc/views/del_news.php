<form method="post">
    <div class="row">
        <?php
        foreach(NewsModel::getAllNews() as $value){
            echo "<label class='radio'>";
            echo "<input type='radio' name='checkDel' value='$value[id]'>" . $value['title'];
            echo "</label>";
        }
        ?>
        <input class="btn btn-danger" type="submit" name="delNews" value="Удалить">
        <a href="<?php echo APP_BASE_URL . '?url=news/index'; ?>" class="btn btn-info">К новостям</a>
    </div>
</form>