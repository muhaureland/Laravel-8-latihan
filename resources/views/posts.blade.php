@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @if ($posts->count())
    {{-- count untuk untuk menghitung jumlah postingan, nilainya akan menghasilkan true jika lebih dari 0--}}
        <div class="card bg-dark text-white">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        <p>by. <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
                        <p class="card-text">{{ $posts[0]->created_at->diffForHumans() }}</p>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn border-primary"> read more..</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">no post found</p>
    @endif
    <div class="container">
        <div class="row">
        @foreach ($posts->skip(1) as $post)
        {{-- skip untuk data pertama agar tidak diulang diforeach--}}
            <div class="col-md-4">
                <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>       
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                by a<a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>{{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn border-primary">readmore..</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection