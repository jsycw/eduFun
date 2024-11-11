@extends('layouts.master')
@section('content')
    <div class="container-fluid d-flex flex-column align-items-center px-5 py-3" style="background-color: #dde6d5a5">
        <div class="d-flex flex-column align-items-start p-3 gap-3">
            <div class="d-flex flex-row justify-content-center px-3 gap-5">
                <img src={{ asset('image/'.$author->photo) }} alt="" class="card-img-center rounded-circle" alt="..." style="width: 80px; height: 80px; object-fit: cover;">
                <div class="d-flex flex-column align-items-center gap-3">
                    <h5>{{$author->name}}</h5>
                    <p>{{$author->specialist}}</p>
                </div>
            </div>
            @include('components.articleCard', ['article' => $author->articles])
        </div>
    </div>
@endsection