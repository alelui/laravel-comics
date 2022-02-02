
@extends('layout.base')

@section('pageTitle')
    HOME
@endsection

@section('pageContent')
    <div class="container">
        @foreach ($credentials as $item)
            <div class="box">
                <div class="img-box">
                    <img src="{{$item['thumb']}}" alt="">
                </div>
                <p>{{$item["series"]}}</p>
            </div>
        @endforeach
    </div>
@endsection