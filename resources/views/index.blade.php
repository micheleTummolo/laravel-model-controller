@extends('layouts.app')

@section('content')
<main>
    <div class="comics_content">
        <div class="main_container">
            <div class="current_series_label">
                <h2 class="m-0">CURRENT SERIES</h2>
            </div>
            <div class="card_container mt-3">
                @foreach($comics as $key => $value)
                <a href="{{ route('detail-comics', ['param' => $key])}}">
                    
                    <div class="my_card">
                        <div class="thumb">
                            <img src="{{ $value['thumb']}}" alt="">
                        </div>
                        <h4>{{ $value['title']}}</h4>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="button_container">
                <button><a href="#">LOAD MORE</a></button>
            </div>
        </div>
    </div>
</main>
@endsection