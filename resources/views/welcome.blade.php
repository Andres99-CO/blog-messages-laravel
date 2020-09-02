@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Last entries</h2>
            @foreach($entries as $entry)
                <div class="card mt-4">
                    <div class="card-header"><a href="{{ $entry->getUrl() }}">{{ $entry->id.". ".$entry->title }}</a></div>

                    <div class="card-body">
                        <p>{{ $entry->content }}</p>
                    </div>

                    <div class="card-footer">
                        Author: <a href="{{ url('users/'.$entry->user_id)}}">{{ $entry->user->name }}</a> 
                    </div>
                </div>
            @endforeach
            
            <div class="row mt-2 justify-content-center">
                {{ $entries->links() }}
            </div>
        </div>
    </div>
</div>
@endsection