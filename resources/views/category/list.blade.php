<x-layout>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h1 class="text-themecolor"><a href="/">RandomIt!</a></h1>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/category/list">Category list</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div style="padding-bottom: 2%">
                    <h1>Category list</h1>
                    <a href="/category/{!! null !!}" class="btn btn-rounded btn-info">Add new category</a><br>
                </div>
                <div class="card">
                    <div class="card-body">
                        @foreach ($categories as $category)
                        Category:
                        <a href=/category/{!! $category->id !!}>{!! $category->name !!}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>