@extends('layouts.app')

@section('content')
	{{-- Featured new --}}
	@if($page < 2 && $last_news)
		<article class="new featured">
			<header class="major">
				<span class="date">{{ $last_news->created_at->toFormattedDateString() }}</span>
				<h2>
					<a href="{{ url("/news/$last_news->id") }}">
						{{ $last_news->title }}
					</a>
				</h2>
			</header>
			<a href="{{ url("/news/$last_news->id") }}" class="image main">
				<img src="{{ asset('images/'.$last_news->main_image()) }}" alt="" />
			</a>
			<ul class="actions special">
				<li>
					<a href="{{ url("/news/$last_news->id") }}" class="button large">Читать</a>
				</li>
			</ul>
		</article>
	@endif
	{{-- News --}}
	@if($news)
		<section class="news">
			@foreach ($news as $news_item)
				<article>
					<header>
						<span class="date">{{ $news_item->created_at->toFormattedDateString() }}</span>
						<h2><a href="{{ url("/news/$news_item->id")  }}">{{ $news_item->title }}</a></h2>
					</header>
					<a href="{{ url("/news/$news_item->id")  }}" class="image fit">
						<img src="{{ asset('images/'.$news_item->main_image())  }}" alt=""/>
					</a>
					<ul class="actions special">
						<li>
							<a href="{{ url("/news/$news_item->id")  }}" class="button">Читать</a>
						</li>
					</ul>
				</article>
			@endforeach
		</section>
			
		{{-- Footer --}}
		<footer>
			{{ $news->links() }}
		</footer>
	@endif
@endsection