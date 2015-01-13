<?php
$value = NewsModel::getNews($news);
echo "<div class='row'>";
$html = "<div class='accordion' id='accordion2'>
  <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' href=''>$value[title]</a>
    </div>
    <div id='collapseOne' class='accordion-body collapse in'>
      <div class='accordion-inner'>";
$html .= $value['content'];
$html .= "</div>
    </div>
  </div>
</div>";
echo $html;
echo "</div>";
?>
<div class="row">
    <a href="<?php echo APP_BASE_URL . '?url=news/index'; ?>" class="btn btn-info">К новостям</a>
</div>