@extends('frontendUser.layout')

        <h1>This is main page</h1>
@section('sidebar')
            This is the master sidebar.
        @show
 
        <div class="container">
            @yield('content')
        </div>
@endsection