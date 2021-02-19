@extends('layout.app');
@section('main')
    <main>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            @method('POST')
            <h1>Create a new Post</h1>
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" value="" placeholder="Inserisci il titolo del post">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="3" placeholder="Inserisci il testo del post"></textarea>
            </div>
            <button type="submit" class="btn">ADD</button>
        </form>
    </main>
@endsection
