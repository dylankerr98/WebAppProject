@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"/>
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Link</h1>

            <form method="POST" action="/links/{{ $link->id }}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $link->title }}" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="url">URL</label>
                    <div class="control">
                        <textarea class="textarea" name="url" id="url" required>{{ $link->url }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="category">Category</label>
                    <div class="control">
                        <select class="select" id="category" name="category" required>
                            <option value="original">Original: {{ $link->category }}</option>
                            <option value="php">Php</option>
                            <option value="docker">Docker</option>
                            <option value="mysql">MySQL</option>
                            <option value="laravel">Laravel</option>
                            <option value="phpstorm">PhpStorm</option>
                            <option value="">Visual Studio Code</option>
                            <option value="composer">Composer</option>
                            <option value="phpmyadmin">PHP MyAdmin</option>
                        </select>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>f

            </form method="POST" action="/links/{{ $link }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </div>
@endsection{
