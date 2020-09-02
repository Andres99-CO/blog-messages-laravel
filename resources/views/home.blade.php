@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>My entries</h2>
            @foreach ($entries as $entry)
            <div class="card mt-2">
                <div class="card-header"> <a href="{{ $entry->getUrl() }}">{{ $entry->title }}</a></div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <p>{{ $entry->content }} </p>
                </div>
            </div>
            @endforeach
            {{ $entries->links() }}
        </div>
    </div>
</div>
@endsection