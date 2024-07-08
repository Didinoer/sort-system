<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>

    <style>
        .login-box{
            border: solid 1px;
            width: 500px;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body style="background-color: cornflowerblue">
    <div class="container m-5 d-flex justify-content-center align-items-center ">
        <div class="login-box mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="text-center" >
                    <img height="300" src="{{ asset('images/LOGO-07.png') }}" alt="logo">

                </div>
            </div>
          <div class="col-md-12" >
            <div class="card " style="background-color: cornflowerblue">
              <div class="card-header" style="background-color: cornflowerblue">
                <h3 class="text-center">Login</h3>
              </div>
              <div class="card-body " style="background-color: cornflowerblue">
                <form action="/login-masuk" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input name="email" type="text" class="form-control" id="username" placeholder="Enter username">
                  </div>
                  <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter password">
                  </div>
                    <div class="text-center mt-2">
                      <button type="submit" class="btn btn-primary">login</button>
                    </div>
                </form>
                @if (Session::has('status'))
                <div class="alert alert-danger">
                    {{Session::get('message')}}
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
