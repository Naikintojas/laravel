@extends('dashboard')

@section('content')
    <div class="container mt-5">
        <h1>{{$post->name}}</h1>
        <small>{{$post->created_at}}</small>
        <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn">edit</a>
    <form action="{{action('App\Http\Controllers\PostsController@destroy', $post['id'])}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn-danger btn">Šalinti</button>
    </form>
    </div>
@endsection