@extends('layouts.app')

@section('content')
    <header>
        <h2>
            Документы
        </h2>
    </header>

    @foreach ($notes as $note)
        <section class="note">
            <div class="note__description">
                <span class="note__date">{{ $note->created_at->toFormattedDateString() }}</span>
                <p class="note__description-text">
                    {{ $note->description }}
                </p>
            </div>
            <ul class="note__documents">
                @foreach ($note->documents as $document)
                    <li class="note__document-item">
                        <a href="{{ url("docs/$document->id") }}"
                            title="{{ $document->original_name }}" 
                            class="icon alt fa-file-text-o">
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endforeach
@endsection