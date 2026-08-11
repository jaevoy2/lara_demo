@extends('_layout._auth-head')

@section('content')

    <div class="container d-flex flex-column justify-content-center col-6 align-items-center vh-100">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
    </div>

@endsection