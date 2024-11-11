@extends('layouts.master')
@section('content')
    <div class="container-fluid p-5 d-flex flex-column align-items-center" style="background-color: #dde6d5a5">
        <h3>Popular</h3>
        @include('components.articleCard', ['article' => $article])
        <div class="d-flex justify-content-center">
            {{!! $article->links() !!}}
        </div>
    </div>
@endsection