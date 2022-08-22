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
                    <li class="breadcrumb-item"><a href="/review/{!! $store->id !!}">Review</a></li>
                </ol>
            </div>
        </div>

        <div class="login-box card">
                <div class="card-body">
                    <h4 class="card-title">Add in new review for <a href="{!! $store->id !!}">{!! $store->name !!}</a></h4>
                    <div class="form-group">
                        <form action="/review/{{ $store->id }}/review" method="post">
                        @csrf
                        <label for='rating'>Rating</label><br>
                        <select class="form-control" name="rating" id="rating">
                            <option value='1'>1-Worst</option>
                            <option value='2'>2-Worse</option>
                            <option value='3'>3-Fair</option>
                            <option value='4'>4-Better</option>
                            <option value='5'>5-Best</option>
                        </select><br>
                    </div>

                        <div class="form-group">
                            <label for='comment'>Comment</label><br>
                            <textarea class="form-control" id="comment" name="comment" rows="5" cols="25"></textarea><br>
                        </div>

                        <div class="form-group">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>