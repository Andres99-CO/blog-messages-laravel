@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>My entry</h2>
            <div class="card mt-2 shadow-sm">
                <div class="card-header"> <a href="{{ url('/entries/'.$entry->id) }}">{{ $entry->title }}</a></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>{{ $entry->content }} </p>

                    @can('update', $entry)
                    <a href="{{ url('entries/'.$entry->id.'/edit') }}" class="btn btn-primary">Edit</a>
                    @endcan
                </div>
                <div class="card-footer">
                    Author: <a href="{{ url('@'.$entry->user->username)}}">{{ $entry->user->name }}</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection