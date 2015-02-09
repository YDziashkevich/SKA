<div class="row">
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
            <li><a href="<?php echo URL::site('main'); ?>">Main</a></li>
            <li class="active"><a href="">News</a></li>
            <li><a href="<?php echo URL::site('gallery'); ?>">Gallery</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab2">

                <?php foreach($news as $one_news): ?>

                    <div class="news_review">

                        <strong style="font-size: 20px"><?php echo $one_news['title']; ?></strong><br />
                        <div style="font-size: 12px">
                            <i>Автор: <a href=""><?php echo $one_news['author']; ?></a></i> /
                            <i>Дата публикации: <?php echo $one_news['date']; ?></i><br /><br />
                        </div>
                        <p><?php echo $one_news['description']; ?></p>
                        <a herf="<?php echo URL::site('news/show'). "/" . $one_news['id']; ?>">Читать далее...</a><br />
                        <a href="<?php echo URL::site('news/edit'). "/" . $one_news['id']; ?>">Редактировать</a>
                        /
                        <a href="<?php echo URL::site('news/del'). "/" . $one_news['id']; ?>">Удалить</a>
                        <br />

                    </div>

                <?php endforeach; ?>

                <p><a href="<?php echo URL::site('news/add') ?>">Добавить новость</a>

            </div>
        </div>
    </div>
</div>