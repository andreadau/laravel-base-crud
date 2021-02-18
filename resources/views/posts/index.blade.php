@extends('layout.app')
@section('main')
    <main>
        <div class="container">
        <a href="{{ route('posts.create') }}">NEW POST</a>
            @foreach($posts as $post)
                <div class="posts">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->description}}</p>
                    <p><a href="#"><span>VIEW</span></a> | <a href="#"><span>EDIT</span></a> | <a href="#"><span>DELETE</span></a><p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
