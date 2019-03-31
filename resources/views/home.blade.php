@extends('layouts.app')

@section('content')
	{{-- Featured new --}}
	@if($page < 2)
		<article class="new featured">
			<header class="major">
				<span class="date">{{ $last_news->created_at->toFormattedDateString() }}</span>
				<h2>
					<a href="{{ url("/news/$last_news->id") }}">
						{{ $last_news->title }}
					</a>
				</h2>
			</header>
			<a href="{{ url('/new/3') }}" class="image main">
				<img src="{{ $last_news->main_image() }}" alt="" />
			</a>
			<ul class="actions special">
				<li>
					<a href="{{ url("/news/$last_news->id") }}" class="button large">Читать</a>
				</li>
			</ul>
		</article>
	@endif
	{{-- News --}}
	<section class="news">
		@foreach ($news as $news_item)
			<article>
				<header>
					<span class="date">{{ $news_item->created_at->toFormattedDateString() }}</span>
					<h2><a href="#">{{ $news_item->title }}</a></h2>
				</header>
				<a href="#" class="image fit">
					<img src="{{ $news_item->main_image() }}" alt=""/>
				</a>
				<ul class="actions special">
					<li><a href="#" class="button">Читать</a></li>
				</ul>
			</article>
		@endforeach
	</section>

	{{-- Footer --}}
	<footer>
		{{ $news->links() }}
		{{-- <div class="pagination">
			<!--<a href="#" class="previous">Предыдущие</a>-->
			<a href="#" class="page active">1</a>
			<a href="#" class="page">2</a>
			<a href="#" class="page">3</a>
			<span class="extra">&hellip;</span>
			<a href="#" class="page">8</a>
			<a href="#" class="page">9</a>
			<a href="#" class="page">10</a>
			<a href="#" class="next">Следующие</a>
		</div> --}}
	</footer>
@endsection