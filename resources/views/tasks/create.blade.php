use
@extends('layout.master')



@section('content')

        @include('layout.errors')


    <form method="post" action="/tasks">
        @csrf
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Название задачи</label>
            <input type="text" class="form-control" id="inputTitle" placeholder="Введите название" name="title">
            <div id="w" class="form-text">это одна из первых форм</div>
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Описание задачи</label>
            <input type="text" class="form-control" id="inputBody" placeholder="Введите задачу" name="body">
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
