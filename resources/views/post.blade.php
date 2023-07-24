@extends('layouts.app')
@section('content')
    <div>
        <form action="/createpost" method="Post">
            @csrf
            <h3>Add Post</h3>
            <label for="">Title</label>
            <input type="text" name="title">
            <label for="">Content</label>
            <input type="text" name="content">
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
