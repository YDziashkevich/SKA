<form method="post">
    <div class="row">
        <div class="control-group">
            <label class="control-label" for="textinput">Заголовок:</label>
            <div class="controls">
                <input id="textinput" name="titleNews" type="text" class="content_edit">
            </div>
        </div>
    </div>
    <div class="row">
        <label class="control-label" for="textarea">Текст новости:</label>
        <textarea class="content_edit" name="contentNews" rows="10" wrap="virtual">
        </textarea>
        <input class="btn btn-success" type="submit" name="save_news" value="Сохранить">
    </div>
</form>
