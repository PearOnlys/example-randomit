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
</x-layout>