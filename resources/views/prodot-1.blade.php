@extends('template.base')
@section('title-tab', 'PRODOTTO' )
@section('main')
<div class="titan"></div>
<div class="cover">
    <img src="{{$comics[$id]['thumb']}}" alt="">
</div>
<div class="main-prodoct">
    <div class="text-part">
        <h1>{{$comics[$id]['title']}}</h1>
        <div class="price">
            <div class="avail">
                <span>{{$comics[$id]['price']}}</span>
                <span>available</span>
            </div>
            <div class="where">Check Avability</div>
        </div>
        <p>{{$comics[$id]['description']}}</p>
    </div>
    <div class="pub">
        <h3>ADVERTISEMENT</h3>
        <img src="/images/pub.jpg" alt="">
    </div>
</div>
<hr>
<div class="more">
    <div class="talent">
       <h1>TALENT</h1>
       <div class="flex">
            <div class="terty">
                Art by
            </div>
            <div class="seven">
                @foreach ($comics[$id]['artists'] as $art)
                    {{$art}}@if ($art != $loop->last), @endif
                @endforeach
            </div>
       </div>
       <div class="flex">
            <div class="terty">
                writen by
            </div>
            <div class="seven">
                @foreach ($comics[$id]['writers'] as $wrt)
                    {{$wrt}}@if ($wrt != $loop->last), @endif
                @endforeach
            </div>
       </div>

    </div>
    <div class="specs">
        <h1>SPECS</h1> 
        <div class="flex">
            <div class="fifty">
                Series
            </div>
            <div class="fifty">
                {{$comics[$id]['series']}}
            </div>
       </div>
       <div class="flex">
            <div class="fifty">
                U.S. Price
            </div>
            <div class="fifty">
                {{$comics[$id]['price']}}
            </div>
       </div>
       <div class="flex">
            <div class="fifty">
                On Sale Date:
            </div>
            <div class="fifty">
                {{$comics[$id]['sale_date']}}
            </div>
       </div>
        
    </div>

</div>
@endsection
