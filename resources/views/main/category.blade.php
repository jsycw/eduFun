@extends('layouts.master')
@section('content')
    <div class="container-fluid p-5 d-flex flex-column align-items-center" style="background-color: #dde6d5a5">
        <h3>{{$category->name}}</h3>
        {{--                                                      ikutin nama function relation di model --}}
        @include('components.articleCard', ['article'=> $category->articles])
    </div>
@endsection
