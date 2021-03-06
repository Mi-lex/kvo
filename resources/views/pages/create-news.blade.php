@extends('layouts.app')

@section('content')
    <form method="post" enctype="multipart/form-data" action="/news/create" class="news-form">
        @csrf
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
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                </div>
            </div>

            <div class="field">
                <label for="body">Текст новости</label>
                <textarea id="body" name="body"></textarea>
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