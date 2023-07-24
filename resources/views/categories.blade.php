@extends('layouts.app')

@section('content')
    <div>
        <form action="/cratecategories" method="Post">
            @csrf
            <label for="">Categories Name</label>
            <input type="text" name="categories">
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
