@extends('layouts.main')
@section('container')
<h1 class="mb-5">Post Categories</h1>
    @foreach ($categories as $category)
            <ul>
                <li>
                    <a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</h2></a>
                </li>
            </ul>
    @endforeach
@endsection