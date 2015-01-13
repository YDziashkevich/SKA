<div class="row">
    <div class="menu">
        <!-- Menu -->
        <ul class="nav nav-pills">
            <li><a href="<?php echo APP_BASE_URL . '?url=main/index'; ?>">Главная </a></li>
            <li><a href="<?php echo APP_BASE_URL . '?url=news/index'; ?>">Новости</a></li>
            <li class="active"><a href="">Галерея</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div id="gallery1">
        <?php
        foreach (GalleryModel::getImages() as $value) {
            echo "<img src='$value[src]' alt='' tabindex='0'/>";
        }
        ?>
        <div></div>
    </div>
</div>
<div class="row">
    <form method='post' enctype=multipart/form-data action=index.php?url=gallery/index>
        <input name='userImage' class="btn" type='file'>
        <input class="btn btn-success" type='submit' name="addImage" value='Добавить'>
    </form>
</div>