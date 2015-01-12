<div class="row">
    <div class="menu">
        <!-- Menu -->
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Главная </a></li>
            <li><a href="<?php echo APP_BASE_URL . '?url=news/index'; ?>">Новости</a></li>
            <li><a href="<?php echo APP_BASE_URL . '?url=gallery/index'; ?>">Галерея</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="content">
        <?php echo MainModel::getContent(); ?>
    </div>
</div>
<div class="row btn_edit">
    <a href="<?php echo APP_BASE_URL . '?url=main/edit'; ?>" class="btn btn-primary">Редактировать</a>
</div>