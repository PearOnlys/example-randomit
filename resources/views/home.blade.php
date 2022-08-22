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
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h1 class="text-themecolor"><a href="/">RandomIt!</a></h1>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                </ol>
            </div>
        </div>

            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row" style="padding: 30px;">
                    <div class="col-12 col-md-12 text-center">
                        <a class="btn waves-effect waves-light btn-lg btn-success" href="/store/random">Random store</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <a href="store/list">Store list</a><br>
                                <a href="category/list">Category list</a><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 text-center">
                            @guest
                                <a class="btn btn-rounded btn-primary" href="/register">Register</a><br>
                                <a class="btn btn-rounded btn-info" href="/login">Log in</a>
                            @endguest
                        
                            @auth
                                <a class="btn btn-rounded btn-warning" href="/favourite/index">Favourite</a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn btn-rounded btn-info" type="submit">Log out</button>
                                </form>
                            @endauth
                    </div>
    </body>
</html>