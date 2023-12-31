@extends('layouts/register-login-layout')

@section('content')

    <body class="bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="flex-grow-1 bg-login-image"
                                        style="background-image: url({{ asset('/img/dogs/image3.jpeg') }});">
                                    </div>


                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Welcome Back!</h4>
                                        </div>
                                        <form class="user">
                                            <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address..." name="email"></div>
                                            <div class="mb-3"><input class="form-control form-control-user"
                                                    type="password" id="exampleInputPassword" placeholder="Password"
                                                    name="password"></div>

                                            <button class="btn btn-primary d-block btn-user w-100"
                                                type="submit">Login</button>
                                            <hr>
                                        </form>
                                        <div class="text-center"><a class="small"
                                                href="{{ route('user.register') }}">Create an
                                                Account!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
