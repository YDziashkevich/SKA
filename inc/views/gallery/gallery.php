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
        if (!isset($page)) {
            $page = 1;
        }
        foreach (GalleryModel::getImages($page) as $value) {
            echo "<img src='$value[src]' alt='' tabindex='0'/>";
        }
        ?>
        <div></div>
    </div>
</div>
<div class="row">
    <?php
    $countImages = (int)GalleryModel::countImages();
    if ($countImages > 8) {
        $numPage = $countImages / 8 + 1;
        echo "<div class='pagination'>";
        echo "<ul>";
        $prev = $page - 1;
        if ($prev < 1) {
            echo "<li><a href=''>Prev</a></li>";
        } else {
            echo "<li><a href='index.php?url=gallery/index/$prev'>Next</a></li>";
        }
        $flag = 0;
        for ($i = 1; $i <= $numPage; $i++) {
            if ($page == $i) {
                echo "<li><a href=''>$i</a></li>";
            } else {
                echo "<li><a href='index.php?url=gallery/index/$i'>$i</a></li>";
            }
            $flag++;
        }
        $next = $page + 1;
        if ($next > $flag) {
            echo "<li><a href=''>Next</a></li>";
        } else {
            echo "<li><a href='index.php?url=gallery/index/$next'>Next</a></li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
</div>
<div class="row">
    <form method='post' enctype=multipart/form-data action=index.php?url=gallery/index>
        <input name='userImage' class="btn" type='file'>
        <input class="btn btn-success" type='submit' name="addImage" value='Добавить'>
    </form>
</div>