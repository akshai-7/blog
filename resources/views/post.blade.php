@extends('layouts.app')
@section('content')
    <div>
        <form action="/create" method="Post">
            @csrf
            <h3>Add Post</h3>
            <label for="">Tittle</label>
            <input type="text" name="titel">
            <label for="">Content</label>
            <input type="text" name="content">
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
