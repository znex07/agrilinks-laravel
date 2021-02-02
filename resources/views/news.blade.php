@extends('layouts.app')

@section('content')
<div class="container py-3" style="background: rgba(0,0,0,0.65);">
    <div class="row py-3">
        @foreach($posts as $post)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <a href="/post/{{ $post->slug }}">
                    {{-- <img class="card-img-top" src="https://www.da.gov.ph/wp-content/uploads/2021/01/Agri-chief-warns-traders-of-jacking-up-prices-of-pork-1536x1024.jpg" alt="Card image cap"> --}}
                </a>
                <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
                <div class="card-body">
                    <span><h3>{{ $post->title }}</h3></span>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                <button class="btn btn-info btn-block">Read more</button>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection
