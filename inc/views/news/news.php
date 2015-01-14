<div class="row">
    <div class="menu">
        <!-- Menu -->
        <ul class="nav nav-pills">
            <li><a href="<?php echo APP_BASE_URL . '?url=main/index'; ?>">Главная </a></li>
            <li class="active"><a href="">Новости</a></li>
            <li><a href="<?php echo APP_BASE_URL . '?url=gallery/index'; ?>">Галерея</a></li>
        </ul>
    </div>
</div>

<?php
foreach (NewsModel::getAllNews() as $value) {
    echo "<div class='row'>";

    $html = "<div class='accordion' id='accordion2'>
  <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' href=" . APP_BASE_URL . "?url=news/read/$value[id]>$value[title]</a>
    </div>
    <div id='collapseOne' class='accordion-body collapse in'>
      <div class='accordion-inner'>";
    $html .= NewsController::trimText(substr($value["content"], 0, 400)) . '...';
    $html .= "</div>
    </div>
  </div>
</div>";
    echo $html;
    echo "</div>";
}
?>

<div class="row">
    <a href="<?php echo APP_BASE_URL . '?url=news/add'; ?>" class="btn btn-success">Добавть новость</a>
    <a href="<?php echo APP_BASE_URL . '?url=news/del'; ?>" class="btn btn-danger">Удалить новость</a>
</div>