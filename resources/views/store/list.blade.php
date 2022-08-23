<x-layout>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h1 class="text-themecolor"><a href="/">RandomIt!</a></h1>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/store/list">Store list</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div style="padding-bottom: 2%">
                    <h1>Store list</h1>
                    <a href="/store/{!! null !!}" class="btn btn-rounded btn-info">Add new store</a><br>
                </div>
                <div class="card">
                    <div class="card-body">

                        @foreach ($stores as $store)
                        Store:
                        <a href="/store/{!! $store->id !!}">{!! $store->name !!}</a>
                        Category:
                        <a href="/category/{!! $store->category->id !!}">{!! $store->category->name !!}</a>
                        Delivery:
                        <a href="/delivery/{!! $store->delivery->id !!}">{!! $store->delivery->name !!}</a>
                            @foreach( $store->favouriteUsers as $user)
                                @if($user->id == $user_id)
                                <span style="color:red"> &hearts; </span>
                                @endif
                            @endforeach<br>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
</x-layout>