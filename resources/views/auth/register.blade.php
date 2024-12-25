<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center" style="height: 100vh">
        <div class="d-flex align-items-center">
            <form action="{{ route('register') }}" method="POST" class="d-flex flex-column justify-content-center card p-3" style="width:300px">
                @csrf
                <h3 class="text-center">Register</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="d-flex flex-column">
                    <label for="username">Username :</label>
                    <input type="text" name="username">
                </div>
                <div class="d-flex flex-column">
                    <label for="email">Email :</label>
                    <input type="email" name="email">
                </div>
                <div class="d-flex flex-column">
                    <label for="password">Password :</label>
                    <input type="password" name="password">
                </div>
                <div class="d-flex flex-column">
                    <label for="password_confirmation">Conferm Password :</label>
                    <input type="password" name="password_confirmation">
                </div>
                <div class="d-flex justify-content-center m-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>