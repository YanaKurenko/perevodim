<div class="container">
    <h1></h1>
    <p></p>
    <form action="/form" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">

            <input type="text" name="contact" id="contact" placeholder="Ваши контактные данные">
        </div>
        <div class="form-group">

            <textarea name="message" id="message" rows="5" placeholder="Запрос"></textarea>
        </div>
        <div class="form-group">
            <div id="dropzone">
                <div>
                    <span>Перенесите сюда файл(ы) или нажмите, чтобы загрузить </span><br>
                    <span>Общий объем файлов не должен превышать 5 Mb</span>
                    <input type="file" name="file">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div id="html_element_cap">

            </div>
        </div>
        <div class="form-group">
            <button type="submit" id="submit-button">Отправить запрос</button>
        </div>
    </form>
</div>