@extends('layouts.app')
@section('content')
    <h2 class="font-bold text-4xl text-blue-700">Categories</h2> 
    <hr class="h-1 bg-blue-200">

    <div class="my-4 text-right px-10">
        <a href="{{route('category.create')}}" class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300">Add Category</a>
    </div>

    <table id="mytable" class="display">
        <thead>
            <th>Order</th>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->priority}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('category.edit',$category->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded shadow hover:shadow-blue-400">Edit</a>
                    <a href="#" class="bg-red-600 text-white px-2 py-1 rounded shadow hover:shadow-red-400">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        let table = new DataTable('#mytable');
    </script>
@endsection