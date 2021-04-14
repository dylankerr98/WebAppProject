@extends('layout')

@section('content')
    <div id="wrapper">
        <div
            id="wrapper"
            class="container"
        >
            <br />
            <br />
            @foreach($links as $link)
                <div class="content">
                    <div class="title">
                        <h1>
                            <a href="/links/{{ $link->id }}">
                                {{ $link->title }}
                            </a>
                        </h1>
                    </div>

                </div>
            @endforeach
            <br />
        </div>
    </div>

@endsection
