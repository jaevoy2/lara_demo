@extends('layout._auth')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="container d-flex flex-column justify-content-center col-4 p-5 border rounded shadow rounded-4">
            <form class="form" action="" method="POST" id="loginForm">
                @csrf
                <p class="mb-5 fs-4">LOGIN</p>
                <div class="form-floating mb-3">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" id="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="d-flex flex-column">
                    <button type="submit" id="submitBtn" class="align-items-center btn btn-primary btn-lg">
                        Login
                        <div class="spinner-border spinner-border-sm" id="loginSpinner" style="display: none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                    
                    <span class="text-danger" id="errTxt"></span>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const loginSpinner = document.getElementById('loginSpinner');
            const errorElement = document.getElementById('errTxt');
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            

            loginSpinner.style.display = 'inline-block';
            errorElement.textContent = '';

            fetch('/api/login-user', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    
                },
                body: JSON.stringify({ email, password })
            })
            .then(response => response.json())
            .then(data => {
                if(data.error) {
                    errorElement.textContent = data.error
                }

                localStorage.setItem('token', data.token);
                window.location.href = "{{ route('home') }}";
            })
            .catch(err => {
                console.log(err)
                errorElement.textContent = err.message
            })
            .finally(() => {
                loginSpinner.style.display = 'none';
            })
        })
    </script>

@endsection



    <!-- const res = fetch('http://lara_demo.test/api/login-user', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            
        },
        body: JSON.stringify({ email, password })
    })

    const response = await res.json(); -->



