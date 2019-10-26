@csrf
<div class="form-group">
    <label for="book-name">Название</label>
    <input type="text" name="name" id="book-name" class="form-control">

    @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Описание</label>
    <textarea name="description" id="description-body" rows="10" class="form-control"></textarea>

    @if ($errors->has('description'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('description') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="page_extente">Количество страниц</label>
    <input type="number" name="page_extent" id="page_extent" class="form-control">

    @if ($errors->has('page_extente'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('page_extente') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="data_release">Дата выпуска</label>
    <input type="date" name="data_release" id="data_release" class="form-control">

    @if ($errors->has('data_release'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('data_release') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="pegi">Возрастное ограничение </label>
    <select class="form-control" id="pegi" name="pegi">
        <option>0</option>
        <option>3</option>
        <option>7</option>
        <option>12</option>
        <option>16</option>
        <option>18</option>
    </select>
    @if ($errors->has('pegi'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('pegi') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="tags">Тэги</label>
    <input type="text" name="tags" id="tags" class="form-control">

    @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('tags') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="ISBN">ISBN</label>
    <input type="text" name="ISBN" id="ISBN" class="form-control">

    @if ($errors->has('ISBN'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('ISBN') }}</strong>
        </div>
    @endif
</div>

<div class="form-group">
    <label for="genres">Жанр книги</label>
    <select id="genres" class="form-control" name="genres">
        @foreach($genres as $genre)
            <option value="{{$genre->name}}">{{$genre->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="language">Жанр книги</label>
    <select id="language" class="form-control" name="language">
        <option value="Rus">Русский</option>
        <option value="Eng">English</option>
        <option value="Ger">German</option>
    </select>
    @if ($errors->has('language'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('language') }}</strong>
        </div>
    @endif
</div>

<div class="form-group">
    <label for="img">Выберите файл</label>
    <input id="img" type="file" multiple name="img">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">Отправить</button>
</div>