@extends('layouts.app')

@section('content')
	{{-- Featured Post --}}
	<article class="post featured">
		<header class="major">
			<span class="date">Декабрь 7, 2018</span>
			<h2><a href="{{ url('/post/3') }}">Соревнования по спортивно-охотничьей стрельбе</a></h2>
		</header>
		<a href="{{ url('/post/3') }}" class="image main"><img src="images/pic02.jpg" alt="" /></a>
		<ul class="actions special">
			<li><a href="{{ url('/post/3') }}" class="button large">Полностью</a></li>
		</ul>
	</article>
	{{-- News --}}
	<section class="posts">
		<article>
			<header>
				<span class="date">Март 23, 2018</span>
				<h2><a href="#">Польша может привлечь армию для отстрела кабанов</a></h2>
			</header>
			<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
			<p>Инициатива принадлежит заместителю министра сельского хозяйства республики Рышарду Зарудзки.
				По словам главы ведомства, организованный отстрел предстоит согласовать с Министерством
				окружающей среды
				и охотниками, так как ранее правительство не проводило "военных действий" против диких кабанов.
			</p>
			<ul class="actions special">
				<li><a href="#" class="button">Полностью</a></li>
			</ul>
		</article>
		<article>
			<header>
				<span class="date">Май 24, 2018</span>
				<h2><a href="#">Соревнования по спортивно-охотничьей стрельбе</a></h2>
			</header>
			<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
			<p>Состоялись соревнования по спортивно-охотничьей стрельбе среди постоянного состава военной академии связи.</p>
			<ul class="actions special">
				<li><a href="#" class="button">Полностью</a></li>
			</ul>
		</article>
	</section>

	{{-- Footer --}}
	<footer>
		<div class="pagination">
			<!--<a href="#" class="previous">Предыдущие</a>-->
			<a href="#" class="page active">1</a>
			<a href="#" class="page">2</a>
			<a href="#" class="page">3</a>
			<span class="extra">&hellip;</span>
			<a href="#" class="page">8</a>
			<a href="#" class="page">9</a>
			<a href="#" class="page">10</a>
			<a href="#" class="next">Следующие</a>
		</div>
	</footer>
@endsection