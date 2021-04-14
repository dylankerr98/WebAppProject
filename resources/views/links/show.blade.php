@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h1>{{ $link->title }}</h1>
                    <br />
                    <p><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></p>
                    <p>Date Published: {{$link->publication_date}}</p>
                    <p>Date Last Accessed: {{$link->date_last_accessed}}</p>
                    <p>Category: {{$link->category}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
