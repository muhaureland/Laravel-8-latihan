@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>back to all my posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span>edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>back</a>
            <p>by. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a href="/posts">kembali</a>
        </div>
    </div>
</div>
@endsection