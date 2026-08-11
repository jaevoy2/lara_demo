@extends('_layout._auth-head')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="container d-flex flex-column justify-content-center col-4 p-5 border rounded shadow rounded-4">
            <form action="{{route(userLogin)}}" method="POST">
                @csrf
                <p class="mb-5 fs-4">LOGIN</p>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                @if($error) 
                    <span class="text-danger">{{ $error }}</span>
                @endif

                <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </form>
        </div>
    </div>

@endsection