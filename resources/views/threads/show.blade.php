@extends('layouts.master')

@section('content')
    <div class="container" id="app">
        <div class="row">
            <div class="col-8">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3>{{$thread->title}}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{$thread->body}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h5>Replies</h5>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-8">
                @foreach($thread->replies as $reply)
                    <div class="card mb-3">
                        <div class="card-header">
                            <h6 class="card-title">{{$reply->owner->name}} said {{$reply->created_at->diffForHumans()}}</h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{$reply->body}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
