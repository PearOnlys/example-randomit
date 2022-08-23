<x-layout>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h1 class="text-themecolor"><a href="/">RandomIt!</a></h1>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/store/list">Store list</a></li>
                <li class="breadcrumb-item"><a href="/store/{!! null !!}">New store</a></li>
            </ol>
        </div>
    </div>

    <div class="login-box card">
        <div class="card-body">
            <h4 class="card-title">Add in new store</h4>
            <div class="form-group">
                <form class="form-horizontal p-t-20" action="/store/{id?}" method="post">
                    @csrf

                    <div class="form-group">
                        <div class="form-group">
                            <label name="name" id="name">Store name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-line"><br>
                            @error('name')
                            <a>{{ $message }}</a><br>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label name="category_id" id="category_id">Category</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                <option value="{!! $category->id !!}">{!! $category->name !!}</option>
                                @endforeach
                            </select>
                            <a href="/category/{!! null !!}">Add new category</a><br>
                        </div>

                        <div class="form-group">
                            <label name="delivery_id" id="delivery_id">Delivery</label>
                            <select class="form-control" name="delivery_id" id="delivery_id">
                                @foreach ($deliveries as $delivery)
                                <option value="{!! $delivery->id !!}">{!! $delivery->name !!}</option>
                                @endforeach
                            </select>
                            <a href="/delivery/{!! null !!}">Add new delivery</a><br>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                        </div>

                </form>
            </div>
        </div>
</x-layout>