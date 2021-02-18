@extends('layout.app')
@section('main')
    <main>
        <div class="container">
            @foreach($posts as $post)
                <div class="posts">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->description}}</p>
                    <p><a href="#"><span>CHANGE</span></a> | <a href="#"><span>DELETE</span></a><p>
                </div>
            @endforeach
        </div>
    </main>
@endsection
