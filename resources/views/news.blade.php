@extends('layouts.app')

@section('content')
<div class="container py-3" style="background: rgba(0,0,0,0.65);">
    <div class="row py-3">
        @foreach($posts as $post)
        <div class="col">
            <div class="card" style="width: 100%; height: 450px;">
                <img src="{{ Voyager::image( $post->image ) }}" style="width: 100%; height: 200px;">
                <div class="card-body">
                    <a href="/post/{{ $post->slug }}">
                        <span><h5>{{ $post->title }}</h5></span>
                    </a>

                    <p class="card-text">{!! Str::limit($post->body,200) !!}</p>
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
