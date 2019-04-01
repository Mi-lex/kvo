@extends('layouts.app')

@section('libraries')
    <style>
        .another_form {
            background: white;
        }
    </style>
@endsection

@section('content')
    <form method="post" enctype="multipart/form-data" action="/news/create" class="another_form">
        {{ csrf_field() }}
        <div class="fields">
            <div class="field">
                <label for="title">Заголовок</label>
                <input type="text" name="title" id="title" />
            </div>

            <div class="field">
                <label for="name">Фотографии</label>
                <div id="myDropzone" class="dropzone">
                    <div class="dz-default dz-message">
                        Добавьте фотографии сюда
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="name">Текст новости</label>
                <textarea id="demo1" name="post-text"></textarea>
            </div>
        </div>
        <ul class="actions">
            <li><input type="submit" id="submit-all" value="Добавить новость" /></li>
        </ul>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('/js/form.js') }}"></script>
@endsection