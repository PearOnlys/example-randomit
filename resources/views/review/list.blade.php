<x-layout>
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
</x-layout>