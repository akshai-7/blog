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
    <div>


        @foreach ($categorieslist as $categorieslist)
            <table>
                <tr class="table_row">
                    <td style="text-align:center;" class="table_data">{{ $categorieslist->id }}
                    </td>
                    <td style="text-align:center;" class="table_data">{{ $categorieslist->name }}
                    </td>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
