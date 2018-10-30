<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Realmast | Login</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/dash.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">RM</h1>

            </div>
            <h3>Welcome to Realmast</h3>

            <p>Admin Login in.</p>

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif
            <form class="m-t" role="form" action="{{url('login/checklogin')}}" method="POST">
               {{ csrf_field() }}
                          @if (count($errors) > 0)
               <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
                </ul>
               </div>
              @endif
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" name="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>

            </form>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/bootstrap2.min.js"></script>

</body>

</html>
