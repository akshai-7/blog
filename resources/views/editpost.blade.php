@extends('layouts.app')
@section('content')
    <div class="mt-5" style="margin-left:100px">
        <h4> Edit Post detailes</h4>
        <form action="/updatepost/{id}" method="Post">
            @csrf
            <table class="table table-bordered mt-2" style="border: 1px solid lightgrey;width:1000px;margin-left:100px">
                <thead>
                    <th style="text-align:center;">Id</th>
                    <th style="text-align:center;">Title</th>
                    <th style="text-align:center;">Content</th>
                    <th style="text-align:center;">Action</th>
                </thead>
                @foreach ($editpost as $editpost)
                    <tr>
                        <td style="text-align:center;" class="table_data"><input type="text" readonly
                                class="form-control" name="id" value="{{ $editpost->id }}">
                        </td>
                        <td style="text-align:center;" class="table_data"><input type="text" class="form-control"
                                name="title" value="{{ $editpost->title }}">
                        </td>
                        <td style="text-align:center;" class="table_data"><input type="text" class="form-control"
                                name="content" value="{{ $editpost->content }}">
                        </td>
                        <td style="text-align:center;" class="table_data">
                            <button type="submit">Submit</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
@endsection
