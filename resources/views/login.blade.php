<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-3">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login</h3>
                        @if (Session::has('error'))
                        <div class="alert alert-danger">
                            <b>Oops!</b> {{session('error')}}
                        </div>
                        @endif
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            <b>Success!</b> {{session('success')}}
                        </div>
                        @endif
                        <form action="{{ url('loginAction') }}" method="post" id="loginForm">
                            @csrf
                            <div class="mb-2">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email address" required>
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </form>
                        <div class="mt-4 text-center">
                            <p>Don't have an account? <a href="{{url('/register')}}">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>