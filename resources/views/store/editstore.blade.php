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
                    <li class="breadcrumb-item"><a href="/store/{!! $store->id !!}/edit">Edit store</a></li>
                </ol>
            </div>
        </div>

        <div class="login-box card">
                <div class="card-body">
                    <h4 class="card-title">Add in new store</h4>
                    <div class="form-group">
                        <form class="form-horizontal p-t-20" action="/store/{!! $store->id !!}/edit" method="post">
                        @csrf

                        <div class="form-group">
                            <div class="form-group">
                                <label name="name" id="name">Store name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-line" value="{!! $store->name !!}"><br>
                                @error('name')
                                    <a>{{ $message }}</a><br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label name="category_id" id="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id" value={!! $store->name !!}>
                                        <option value="{!! $store->category->id !!}">{!! $store->category->name !!}
                                    @foreach ($categories as $category)
                                        @if ($store->category->id != $category->id)
                                            <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <a href="/category/{!! null !!}">Add new category</a><br>
                            </div>

                            <div class="form-group">
                                <label name="delivery_id" id="delivery_id">Delivery</label>
                                <select class="form-control" name="delivery_id" id="delivery_id">
                                    <option value="{!! $store->delivery->id !!}">{!! $store->delivery->name !!}
                                @foreach ($deliveries as $delivery)
                                    @if ($store->delivery->id != $delivery->id)
                                    <option value="{!! $delivery->id !!}">{!! $delivery->name !!}</option>
                                    @endif
                                @endforeach
                                </select>
                                <a href="/delivery/{!! null !!}">Add new delivery</a><br>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            </div>

                    </form>
                </div>
            </div>
    </body>
</html>