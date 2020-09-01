@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>My entry</h2>
            <div class="card mt-2">
                <div class="card-header"> <a href="{{ url('/entries/'.$entry->id) }}">{{ $entry->title }}</a></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>{{ $entry->content }} </p>

                    @if($entry->user_id === auth()->id())
                        <a href="{{ url('/entries/'.$entry->id.'/edit') }}" class="btn btn-primary">Edit</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection