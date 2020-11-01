@extends('dashboard')

@section('content')
<div class="container mt-5">
    <h3>Posts</h3>
    <hr>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <h3><a href="/posts/{{$post->id}}">{{$post->name}}</a></h3>
            <small>{{$post->created_at}}</small>
        @endforeach
        {{$posts->links()}}
        @else
            <p>No Posts</p>
</div>

    @endif
@endsection