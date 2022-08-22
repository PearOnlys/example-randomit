<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>Randomit!</title>
        <!-- Bootstrap Core CSS -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/main/css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="/main/css/colors/blue.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
    <div class="login-register" style="background-color: #1976d2;">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="/session" method="post">
                        @csrf
                        <h3 class="box-title m-b-20">Log In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" type="text" name="name" id="name" placeholder="Username"> </div>
                                @error('name')
                                    <br><span>{{ $message }}</span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password"> </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        
                        <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <div>Don't have an account? <a href="/register" class="text-info m-l-5"><b>Register new</b></a></div>
                                </div>
                                <div class="col-sm-12 text-center" style="padding-top: 30px;">
                                    <a class="btn waves-effect waves-light btn-rounded btn-outline-info" href="/">Return home</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </body>
</html>