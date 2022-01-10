@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            
            <div class="col">
            @auth
                <img src="{{ Auth::user()->avatar }}" width="48" height="48">
                <p>ツイッターID：　{{ Auth::user()->unique_id }}</p>
                <p>名前：　{{ Auth::user()->name }}</p>
                <p>紹介文：　{{ Auth::user()->bio }}</p>
            @endauth
            </div>
       </div>
    </div>

@endsection