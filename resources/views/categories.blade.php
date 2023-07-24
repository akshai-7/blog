@extends('layouts.app')

@section('content')
    <div>
        <form action="/cratecategories" method="Post" style="margin-left:100px">
            @csrf
            <h4 class="mt-3">Add Categories</h4>
            <label for="" class="mt-3">Categories Name</label>
            <input type="text" name="categories">
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="mt-5" style="margin-left:100px">
        <h4> Categories detailes</h4>
        <table class="table table-bordered mt-2" style="border: 1px solid lightgrey;width:1000px;margin-left:100px">
            <thead>
                <th style="text-align:center;">Id</th>
                <th style="text-align:center;">Categories</th>
                <th style="text-align:center;">Action</th>
            </thead>
            @foreach ($categorieslist as $list)
                <tr>
                    <td style="text-align:center;" class="table_data">{{ $list->id }}
                    </td>
                    <td style="text-align:center;" class="table_data">{{ $list->name }}
                    </td>
                    <td style="text-align:center;" class="table_data">
                        <a href="/updatecategorie/{{ $list->id }}" class="btn btn-success btn-sm mt-1"><i
                                class="fa-solid fa-pen-to-square btn-btn-success"></i></a>
                        <a href="/remove/{{ $list->id }}" class="btn btn-danger btn-sm mt-1"><i
                                class="fa-solid fa-trash "></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
