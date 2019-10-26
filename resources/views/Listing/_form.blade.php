@csrf
<div class="form-group">
    <label for="listing-name">Название</label>
    <input type="text" name="name" id="listing-name" class="form-control">
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
</div>
<div class="form-group">
    <label for="description">Описание</label>
    <input type="text" id="description" name="description" class="form-control">
</div>
<div class="form-group">
    <label for="price">Цена</label>
    <input type="number" id="price" name="price" class="form-control">
</div>
<div class="form-group">
    <label for="condition">Состояник книги</label>
    <select class="form-control" id="condition" name="condition">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<div class="form-group">
    <label for="digital">Тип книги</label>
    <select class="form-control" id="digital" name="digital">
        <option value="1">Печатная книга</option>
        <option value="2">Электронная книга</option>
        <option value="3">Аудио-книга</option>
    </select>
</div>
<label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="limited_edition" value="1">
    <span class="custom-control-indicator"></span>
    <span>Эксклюзивнное издание</span>
        <strong>{{ $errors->first('limited_edition') }}</strong>
</label>
<label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="delivery" value="1">
    <span class="custom-control-indicator"></span>
    <span>Доставка</span>
</label>
<label class="custom-control custom-checkbox" >
    <input type="checkbox" class="custom-control-input" name="sell_negotiate" value="1">
    <span class="custom-control-indicator"></span>
    <span>Торг</span>
</label>
<label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="trade" value="1">
    <span class="custom-control-indicator"></span>
    <span>Обмен</span>
</label>
<label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="trade_negotiate" value="1">
    <span class="custom-control-indicator"></span>
    <span>Предложения обмена</span>
</label>
<div class="form-group">
    <label for="trade_list">Предложения обмена</label>
    <input type="text" id="trade_list" name="trade_list" class="form-control">
</div>
<label class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="sell" value="1">
    <span class="custom-control-indicator"></span>
    <span>Продажа</span>
</label>
<div class="form-group">
    <label for="delivery_price">Стоимость доставки</label>
    <input type="text" name="delivery_price" id="listing-name" class="form-control">
</div>

<div class="form-group">
    <label for="payment">Тип оплаты</label>
    <select class="form-control" id="payment" name="payment">
        <option value="1">Paypal</option>
        <option value="2">WebMoney</option>
        <option value="3">Qiwi</option>
    </select>
</div>

<div class="form-group">
    <label for="img">Выберите файл</label>
    <input id="img" type="file" multiple name="img">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">Отправить</button>
</div>