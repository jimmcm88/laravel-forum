@extends('layouts.master')

@section('content')
    <div class="container" id="app">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Forum Threads</h1>
                    </div>
                    <div class="card-body">
                        @foreach($threads as $thread)
                            <article>
                                <h4 class="card-title">
                                    <a href="{{$thread->path()}}">{{$thread->title}}</a>
                                </h4>
                                <p class="card-text">
                                    {{$thread->body}}
                                </p>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
