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
                    <li class="breadcrumb-item"><a href="/store/list">Store list</a></li>
                    <li class="breadcrumb-item"><a href="/store/{!! $store->id !!}">{!! $store->name !!}</a></li>
                    <li class="breadcrumb-item"><a href="/review/{!! $store->id !!}/list">Review list</a></li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                        <div style="padding-bottom: 2%">
                            <h1>Review list</h1>
                            <h4>All reviews for <a href="/store/{!! $store->id !!}">{!! $store->name !!}</a></h4>
                            <a href="/review/{!! $store->id !!}/review" class="btn btn-rounded btn-info">Add new review</a><br>
                        </div>
                    <div class="card">
                        <div class="card-body">
                        @foreach ($reviews as $review)
                            Rating: <span>{!! $review->rating !!}</span>
                            Comment: <span>{!! $review->comment !!}</span><br>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>