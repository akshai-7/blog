@extends('layouts.app')
@section('content')
    <div class="mt-5">
        <h3> Categories detailes</h3>
        <form action="/update/{id}" method="Post">
            @csrf
            <table class="table table-bordered mt-2">
                <thead>
                    <th style="text-align:center;">Id</th>
                    <th style="text-align:center;">Categories</th>
                    <th style="text-align:center;">Action</th>
                </thead>
                @foreach ($updatecategorie as $updatecategorie)
                    <tr>
                        <td style="text-align:center;" class="table_data"><input type="text" readonly class="form-control"
                                name="id" value="{{ $updatecategorie->id }}">
                        </td>
                        <td style="text-align:center;" class="table_data"><input type="text" class="form-control"
                                name="name" value="{{ $updatecategorie->name }}">
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
