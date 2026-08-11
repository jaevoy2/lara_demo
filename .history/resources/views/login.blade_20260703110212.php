<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="mt-5">
        <div class="bg-cover">
            <!-- <img src="{{asset("images/school.png")}}" alt=""> -->
        </div>
        <div class=" login_form d-flex justify-content-center">
            <a href="" class="logo">
                <!-- <img src="{{asset("images/one student.png")}}" width="300px" alt=""> -->
                <img src="{{asset('/images/login_logo.png')}}" width="250px" height="auto" class="" alt="">
            </a>
            <div class="login_card loginForm">
                <div class="formInput">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <input type="email" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required autofocus>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <!-- <div class="d-grid mx-auto mb-4 shadow bg-body-tertiary rounded col-4">
                            <button type="submit" class="btn btn-primary log-button text-light">Login</button>
                        </div> -->

                        <a class="btn btn-primary log-button text-light" href="{{ route('home') }}">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>


    </script>
</body>
</html>

