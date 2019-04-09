<?php
    $categories = [
        '/' => [
            'name' => 'Новости',
        ],
        'docs' => [
            'name' => 'Документы',
        ],
        'albums' => [
            'name' => 'Фотоальбомы',
        ],
        'contacts' => [
            'name' => 'Контакты',
        ],
        'vacation' => [
            'name' => 'Базы отдыха',
        ],
        'huntinginfo' => [
            'name' => 'Охотминимум',
        ],
    ];
?>

<nav id="nav">
    <ul class="links">
        @foreach ($categories as $link => $category)
            <li class="{{ Request::is($link) ? 'active' : null }}">
                <a href="{{ url($link) }}">{{ $category['name'] }}</a>
            </li> 
        @endforeach
    </ul>
</nav>