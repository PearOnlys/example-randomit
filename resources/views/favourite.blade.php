<x-layout>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h1 class="text-themecolor"><a href="/">RandomIt!</a></h1>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/favourite/index">Favourite list</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1>Favourite list</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        @foreach ($stores as $store)
                        Store:
                        <a href=/store/{!! $store->id !!}>{!! $store->name !!}</a>
                        Category:
                        <a href=/category/{!! $store->category->id !!}>{!! $store->category->name !!}</a>
                        <br>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>