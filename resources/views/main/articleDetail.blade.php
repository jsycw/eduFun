@extends('layouts.master')
@section('content')
    <div class="container-fluid d-flex flex-column align-items-center px-5 py-3" style="background-color: #dde6d5a5">
        <img src="{{ asset('image/'.$article->photo) }}" alt="" style="width: 100%; height:500px; border-radius: 20px">
        <div class="d-flex flex-column align-items-start px-3">
            <p class="pt-2">{{$article->created_at->format('d M Y')}} | by: {{strstr($article->author->name, " ", true)}}</p>
            <p class="pb-4">{!! nl2br(e($article->desc)) !!}</p>
        </div>
    </div>
@endsection