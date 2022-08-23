<x-layout>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h1 class="text-themecolor"><a href="/">RandomIt!</a></h1>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/delivery/{!! null !!}">New delivery</a></li>
            </ol>
        </div>
    </div>

    <div class="login-box card">
        <div class="card-body">
            <h4 class="card-title">Add in new delivery</h4>
            <form class="form-horizontal p-t-20" action="/delivery/{id?}" method="post">
                @csrf

                <div class="form-group">
                    <div class="form-group">
                        <label name="name" id="name">Delivery name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-line"><br>
                        @error('name')
                        <a>{{ $message }}</a><br>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-layout>