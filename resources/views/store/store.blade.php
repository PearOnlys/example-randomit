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
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                            <div>
                                <h1>{!! $store->name !!}</h1><br>
                            </div>
                        <div class="card">
                            <div class="card-body">
                                Category: <a href="/category/{!! $store->category->id !!}">{!! $store->category->name !!}</a><br>
                                Delivery: <a href="/delivery/{!! $store->delivery->id !!}">{!! $store->delivery->name !!}</a><br>

                                @if(is_null($store->reviews->last()))
                                    Average rating: <a href="/review/{!! $store->id !!}/review">Be the first to review</a><br>
                                    Review comment: <a href="/review/{!! $store->id !!}/review">Be the first to review</a>
                                @else
                                    Average rating: <a>{!! round($rating,2) !!}</a><br>
                                    Review comment: <a>{!! $store->reviews->last()->comment !!}</a>
                                    <br><a href="/review/{!! $store->id !!}/list">All Reviews</a><br>
                                @endif
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                    <a class="btn btn-rounded btn-info" href="/review/{!! $store->id !!}/review">Add Review</a>
                                    </div>

                                    <div class="col-sm-6 text-center">
                                    <a class="btn btn-rounded btn-secondary" href="/store/{!! $store->id !!}/edit">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @auth
                        <div class="col-sm-12 text-center">
                                @if(count($favourites)==0)
                                    <a class="btn waves-effect waves-light btn-rounded btn-success" href="/favourite/{!! $store->id !!}">Add to favourite</a>
                                @else
                                    <a class="btn waves-effect waves-light btn-rounded btn-danger" href="/favourite/{!! $store->id !!}/remove">Remove from favourite</a>
                                @endif
                        </div>
                        @endauth
                    </div>
                </div>
    </body>
</html>