<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <title>Login Page</title>
</head>

<body>
        <div class="login">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-4">
                    <div class="header">
                        <h1>Welcome Back</h1>
                        <p>Welcome back! Please enter your information.</p>
                    </div>
                    <div class="login-form">
                        <form action="/" method="POST">
                            @csrf
                            <div class="inputRegister">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email" name="email">
                            </div>
    
                            <div class="inputRegister">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Your Password" name="password">
                            </div>
                          <button class="btn-signIn">Sign In</button>
                          <div class="text-center">
                            <span>Don’t have an account?<a href="/register">Sign up for free</a></span>
                          </div>        
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>