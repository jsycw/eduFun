@extends('layouts.master')
@section('content')
    <div class="" style="background-image: url(/image/HeroSection.jpg); height: 600px; background-size: cover; background-position: center -100px;">
    </div>
    <div class="container-fluid p-5 d-flex flex-column align-items-center" style="background-color: #dde6d5a5">
        @include('components.articleCard')
    </div>
@endsection