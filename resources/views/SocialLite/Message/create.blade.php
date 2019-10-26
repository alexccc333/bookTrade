@extends('layouts.app')
@section('content')
<form action="{{route('message.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="message-send">Собщение</label>
        <input type="text" class="form-control" name="message-send" id="message-send" aria-describedby="helpId"
            placeholder="В ведите собщение пользователю">
        <small id="helpId" class="form-text text-muted">Собщение</small>
        <input type="hidden" name="send_user_id" value="{{$listing->user_id}}">
    </div>
    <button class="btn btn-success" type="submit">Отправить собщение</button>
</form>
@endsection
