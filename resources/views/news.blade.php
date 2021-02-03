@extends('layouts.app')

@section('content')
<div class="container py-3" style="background: rgba(0,0,0,0.65);">
    <div class="row py-3">
        @foreach($posts as $post)
        <div class="col">
            <div class="card" style="width: 100%; height: 400px;">
                <img src="{{ Voyager::image( $post->image ) }}" style="width: 100%; height: 200px;">
                <div class="card-body news-text">
                    <a href="/post/{{ $post->slug }}">
                    <span><h6>{{ Str::upper($post->title) }}</h6></span>
                    </a>

                    <h6  id="news-text{{$post->id}}"  class="card-text">{!! $post->body !!}</h6>
                </div>
                <div class="card-footer">
                <button class="btn btn-info btn-block">Read more</button>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    var posts = [
        @foreach($posts as $post)
            [ "{{ $post->id }}" ],
        @endforeach
    ];

    posts.forEach(getPost);
    var newstext;
    function getPost(item, index){
      newstext = document.getElementById('news-text'+item);
      var newstruncate = truncate(newstext.children[0].textContent,80);
      newstext.innerHTML = newstruncate;
    }
    function truncate(str, n){
        return (str.length > n) ? str.substr(0, n-1) + '&hellip;' : str;
    };

</script>

@endsection
