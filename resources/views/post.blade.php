@extends('layouts.app')
@section('content')
    <div>
        <form action="/createpost" method="Post" style="margin-left:100px">
            @csrf
            <h4>Add Post</h4>
            <label for="" class="mt-3">Title</label>
            <input type="text" name="title">
            <label for="" class="mt-3">Content</label>
            <input type="text" name="content">
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="mt-5" style="margin-left:100px">
        <h4>Post detailes</h4>
        <table class="table table-bordered mt-2" style="border: 1px solid lightgrey;width:1000px;margin-left:100px">
            <thead>
                <th style="text-align:center;">Id</th>
                <th style="text-align:center;">Title</th>
                <th style="text-align:center;">Content</th>
                <th style="text-align:center;">Action</th>
            </thead>
            @foreach ($posts as $list)
                <tr>
                    <td style="text-align:center;" class="table_data">{{ $list->id }}
                    </td>
                    <td style="text-align:center;" class="table_data">{{ $list->title }}
                    </td>
                    <td style="text-align:center;" class="table_data">{{ $list->content }}
                    </td>
                    <td style="text-align:center;" class="table_data">
                        <a href="/editpost/{{ $list->id }}" class="btn btn-success btn-sm mt-1"><i
                                class="fa-solid fa-pen-to-square btn-btn-success"></i></a>
                        <a href="/removepost/{{ $list->id }}" class="btn btn-danger btn-sm mt-1"><i
                                class="fa-solid fa-trash "></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
