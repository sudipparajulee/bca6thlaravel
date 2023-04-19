@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-4xl text-blue-700">Categories</h2> 
    <hr class="h-1 bg-blue-200">

    <table id="mytable" class="display">
        <thead>
            <th>Order</th>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Watch</td>
                <td>Edit Delete</td>
            </tr>
        </tbody>
    </table>

    <script>
        let table = new DataTable('#mytable');
    </script>
@endsection