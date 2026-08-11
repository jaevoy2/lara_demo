@extends('_layout._auth-head')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="container d-flex flex-column justify-content-center col-4 p-5 border rounded shadow rounded-4">
            <form action="{{route('userLogin')}}" method="POST">
                @csrf
                <p class="mb-5 fs-4">LOGIN</p>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="d-flex flex-column">
                    <button type="submit" class="btn btn-success btn-lg">Login</button>
                    
                    @if(session('error'))
                        <span class="text-danger">{{ session('error') }}</span>
                    @endif
    
                </div>
            </form>
        </div>
    </div>

@endsection