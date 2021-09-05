@extends('template.base')
@section('title-tab', 'HOME' )
@section('main')
<div class="main-home">
    <div class="row">
        @foreach($comics as $one)
        <a class="one-comics" href="/prodoct/{{$loop->iteration}}">
                <img src="{{$one['thumb']}}" alt="">
                <h5>{{@strtoupper($one['title'])}}</h5>
        </a>
        @endforeach

    </div>
</div>
@endsection
