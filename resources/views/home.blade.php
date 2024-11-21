@extends('layouts.app')

@section('content')
    <div class="journals">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Entry</th>
                    <th scope="col">Emotion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($journals as $journal)
                    <tr>
                        <td>{{$journal->created_at}}</td>
                        <td>{{$journal->entry}}</td>
                        <td><img src="{{asset($journal->emotion)}}" class="emotionImg" alt="emotion"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
