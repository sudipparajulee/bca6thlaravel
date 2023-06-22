@extends('layouts.app')
@section('content')
@include('layouts.message')

    <h2 class="font-bold text-4xl text-blue-700">Order Details</h2> 
    <hr class="h-1 bg-blue-200">


    <table id="mytable" class="display">
        <thead>
            <th>Product</th>
            <th>Product Name</th>
            <th>Rate</th>
            <th>Qty</th>
            <th>Total</th>
        </thead>
        <tbody>
            @foreach($carts as $cart)
            <tr>
                <td><img class="w-12" src="{{asset('images/products/'.$cart->product->photopath)}}" alt=""></td>
                <td>{{$cart->product->name}}</td>
                <td>{{$cart->product->price}}</td>
                <td>{{$cart->qty}}</td>
                <td>{{$cart->qty * $cart->product->price}}</td>
               
            </tr>
            @endforeach
        </tbody>

        GRand total : {{$order->amount}}
    </table>

    {{-- backdrop-filter: blur(15px); --}}
    <div id="deleteModal" class="fixed hidden left-0 top-0 right-0 bottom-0 bg-opacity-50 backdrop-blur-sm bg-blue-400">
        <div class="flex h-full justify-center items-center">
            <div class="bg-white p-4 rounded-lg">
                <form action="{{route('category.destroy')}}" method="POST">
                    @csrf
                    <p class="font-bold text-2xl">Are you Sure to Delete?</p>
                    <input type="hidden" name="dataid" id="dataid" value="">
                    <div class="flex justify-center">
                        <input type="submit" value="Yes" class="bg-blue-600 text-white px-4 py-2 mx-2 rounded-lg cursor-pointer">
                        <a onclick="hideDelete()" class="bg-red-600 text-white px-4 py-2 mx-2 rounded-lg cursor-pointer">No</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let table = new DataTable('#mytable');
    </script>

    <script>

        function showDelete(x)
        {
            // $('#dataid').val(x);
            document.getElementById('dataid').value = x;
            document.getElementById('deleteModal').style.display = "block";
        }

        function hideDelete()
        {
            document.getElementById('deleteModal').style.display = "none";
        }
    </script>
@endsection