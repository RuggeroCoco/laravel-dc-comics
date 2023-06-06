@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>La lista dei comics</h2>
        <table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th class="text-center">
                <img class="w-50" src="{{$comic->thumb}}" alt="">
            </th>
            <td scope="row">{{$comic->title}}</td>
            <td>{{$comic->type}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection