@extends('guest.layouts.base')

@section('content')
    <div class="container">
        <div class="current">current series</div>
        <div class="cards">
            @foreach ($comics as $comic)
                <div class="card">
                    <a href="#!" target="_blank">
                        <img src="{{ $comic['thumb'] }}" alt="">
                    </a>
                    <div class="title">{{ $comic['title'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="load-button">load more</div>
    </div>
@endsection
