@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2>Twits</h2>
            <div class="card mt-2">
                <div class="card-header"> <a href="">{{ $user->name }}</a></div>
                <div class="card-body">
                    Tweets API
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h2>Perfil</h2>
            <div class="card mt-2">
                <div class="card-header"> <a href="">{{ $user->name }}</a></div>
                <div class="card-body">
                    <p>{{ $user->email }} </p>

                    @if($user->id === auth()->id())
                    <a href="{{ url('') }}" class="btn btn-primary">Edit</a>
                    @endif
                    {{-- Entries --}}
                    @foreach ($entries as $entry)
                    <div class="card mt-2">
                        <div class="card-header"> <a href="{{ url('/entries/'.$entry->id) }}">{{ $entry->title }}</a></div>
                        <div class="card-body">
                            <p>{{ $entry->content }} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection