<div class="row">
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
            <li class="active"><a href="">Main</a></li>
            <li><a href="<?php echo URL::site('news'); ?>">News</a></li>
            <li><a href="<?php echo URL::site('gallery'); ?>">Gallery</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">

                <?php foreach($messages as $message): ?>
                    <div class="news_review">
                        <strong style="font-size: 20px"><?php echo $message['title']; ?></strong><br />
                        <div style="font-size: 12px">
                            <i>Дата публикации: <?php echo $message['date']; ?></i><br /><br />
                        </div>
                        <p><?php echo $message['content']; ?></p>
                        <a href="<?php echo URL::site('main/edit/' . $message['id']); ?>">Редактировать</a>
                        /
                        <a href="<?php echo URL::site('main/del/' . $message['id']); ?>">Удалить</a>
                    </div>

                <?php endforeach; ?>
                <p><a href="<?php echo URL::site('main/add') ?>">Добавить сообщение</a>

            </div>
        </div>
    </div>
</div>