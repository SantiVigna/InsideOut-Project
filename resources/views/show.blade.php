@extends('layouts.app')

@section('content')
    <div class="journal">
        <h2 class="journalTitle">Entry</h2>
        <div class="journalTime">
            <p>created: {{$journal['created_at']}}</p>
            <p>update: {{$journal['updated_at']}}</p>
        </div>
        <div class="journalContent">
            <p class="journalEntry">{{$journal['entry']}}</p>
            <img class="journalImage" src="{{$journal['emotion']}}" alt="emotion"/>
        </div>
    </div>
@endsection
