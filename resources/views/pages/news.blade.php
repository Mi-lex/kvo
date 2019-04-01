@extends('layouts.app')

@section('content')
    <!-- Featured new -->
    <article class="new">
        <header class="major">
            <span class="date">{{ $news->created_at->toFormattedDateString() }}</span>
            <h2>{{ $news->title }}</h2>
        </header>
        <div class="image main">
            {{-- Replace with gallary --}}
            <div class="fotorama" data-width="100%" data-max-width="100%"
                data-nav="thumbs">
    
                @foreach ($news->images as $image)
                    <a href="{{ asset("/images/$image->filename") }}">
                        <img src="{{ asset("/images/$image->resized_name") }}">
                    </a>
                @endforeach
            </div>
        </div>
        @markdown($news->body)
        {{-- <p>В соответствии с приказом начальника Военной академии связи от 5 декабря 2018 г. №873 и Планом
            основных спортивных мероприятий академии на 2018/2019 учебный год 7 декабря 2018 г. проводились
            спортивные соревнования по спортивно-охотничьей стрельбе среди постоянного состава академии. По
            итогам соревнований призовые места были распределен следующим образом. В командном зачете<br>
            1 место - 2 факультет (м-р Ашлапов М.В., к-н Калмыков С.),<br>
            2 место - НИЦ (п-к Гель В.Э., м-р Щукин А.В.),<br>
            3 место - управление (к-н Григорье А.А., л-т Попов Р.С.)</p> --}}
    </article>
@endsection

@section('scripts')
    <script src="{{ asset('/js/news.js') }}"></script>
@endsection


