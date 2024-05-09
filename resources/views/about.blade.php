@extends('layouts.master')

@section('content')
        <h1>{{ $title }}</h1>
        <p>This is the home page for an example Laravel web application.</p>


        <form action="/" method="post">
        {!! csrf_field() !!}
            <label for="number1">Number1:</label>
            <input type="text" id="number1" name="number1">
            <label for="number2">Number2:</label>
            <input type="text" id="number2" name="number2">
            <input type="submit">
        </form>
@endsection