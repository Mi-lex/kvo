@extends('layouts.app')

@section('content')
    <form method="post" enctype="multipart/form-data" action="/docs/create" class="notes-form">
        @csrf
        <div class="fields">
            <div class="field">
                <label for="description">Описание документов</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="field">
                <label for="name">Документы</label>
                <div id="myDropzone" class="dropzone">
                    <div class="dz-default dz-message">
                        Добавьте файлы сюда
                    </div>
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                </div>
            </div>
        </div>
        <ul class="actions">
            <li><input type="submit" id="submit-all" value="Добавить документ(ы)" /></li>
        </ul>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('/js/note-form.js') }}"></script>
@endsection