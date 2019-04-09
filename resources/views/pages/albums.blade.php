@extends('layouts.app')

@section('content')
	{{-- Featured new --}}
    @if($albums)
        @foreach ($albums as $album)
            <article class="album featured">
                <header class="major">
                    <span class="date">{{ $album->created_at->toFormattedDateString() }}</span>
                    <h2>
                        <a href="{{ url("/news/$album->id") }}">
                            {{ $album->title }}
                        </a>
                    </h2>
                </header>
                <a href="{{ url("/news/$album->id") }}" class="image main">
                    <img src="{{ asset('images/'.$album->main_image()) }}" alt="" />
                </a>
                <ul class="actions special">
                    <li>
                        <a href="{{ url("/news/$album->id") }}" class="button large">Читать</a>
                    </li>
                </ul>
            </article>
        @endforeach
	@endif
@endsection