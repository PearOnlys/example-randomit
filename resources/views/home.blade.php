<x-layout>
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
</x-layout>