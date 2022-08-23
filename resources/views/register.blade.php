<x-layout>
        <div class="login-register" style="background-color: #1976d2;">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" action="/register" method="post">
                        @csrf
                        <h3 class="box-title m-b-20">Register new</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Username">
                                @error('name')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                                @error('email')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                @error('password')
                                <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <div>Already have an account? <a href="/login" class="text-info m-l-5"><b>Log In</b></a></div>
                            </div>
                            <div class="col-sm-12 text-center" style="padding-top: 30px;">
                                <a class="btn waves-effect waves-light btn-rounded btn-outline-info" href="/">Return home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-layout>