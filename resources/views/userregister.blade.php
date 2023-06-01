@extends('master')
@section('content')
@include('layouts.message')
    <div class="w-1/2 mx-auto p-6 rounded-lg bg-gray-200 shadow-lg my-5">
        <h2 class="font-bold text-4xl text-center my-4">Register</h2>
        <form action="{{route('user.register')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Name" class="w-full px-2 rounded-lg  my-4">
            <input type="text" name="phone" placeholder="Enter Phone" class="w-full px-2 rounded-lg  my-4">
            <input type="text" name="address" placeholder="Enter Address" class="w-full px-2 rounded-lg  my-4">
            <input type="text" name="email" placeholder="Email" class="w-full px-2 rounded-lg  my-4">
            <input type="password" name="password" placeholder="Password" class="w-full px-2 rounded-lg  my-4">
            <input type="password" name="password_confirmation" placeholder="Re-Enter Password" class="w-full px-2 rounded-lg my-4">
            <input type="submit" value="Register" class="w-1/2 block p-2 rounded-lg mx-auto my-4 bg-indigo-600 text-white">
            <a href="{{route('login')}}">Login Here</a>
        </form>
    </div>

@endsection