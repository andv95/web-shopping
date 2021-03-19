@extends('templates.master')

@section('style-css')
    <link rel="stylesheet" href="{{asset('css/FAQ/faq.css')}}">
    <link rel="stylesheet" href="{{asset('css/FAQ/faq-style.css')}}">

@stop

@section('content')
    <div class="accordion-container">
        <h2>{{ $page->title }}</h2>
        <p class="text-center">{{ $page->excerpt }}</p>

        <ul class="accordion-list">
            @if(!empty($args['faq']))
                @foreach($args['faq'] as $faq)
                    <li>
                        <h3>{{ $faq->name }}</h3>
                        <div class="answer">
                            {!! $faq->content !!}
                        </div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
@stop

@section('js-style')
    <script src="{{asset('js/FAQ/faq.js')}}" type="text/javascript"></script>

@stop
