@extends('layout.app');
@section('main')
    <main>
    <div class="container">
        <a href="{{ route('posts.index') }}">BACK TO POST</a>
                <div class="posts">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->description}}</p>
                    <p><a href="{{ route('posts.show', $post->id) }}"><span>VIEW</span></a> | 
                    <a href="#"><span>EDIT</span></a> | 
                    <a href="#"><span>DELETE</span></a><p>
                </div>
        </div>
    </main>
@endsection