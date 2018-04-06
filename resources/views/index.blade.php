@extends('layouts.app')

@section('content')
    @guest
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-3 mt-5">
                    <img src="images/smartphone.png" height="450">
                </div>
                <div class="col-md-5">

                    <div class="card">

                        <div class="card-body">

                            <h3 style="font-family: 'IBM Plex Sans Condensed', sans-serif; color: rgba(0,0,0,.7); font-size: 22px;" class="text-center mt-3 mb-5">Instaframe</h3>

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="imageDP" class="col-md-4 col-form-label text-md-right">Upload Profile Picture</label>
                                    <input type="file" name="imageDP"></input>
                                </div>


                                <p>Already have an account, <a href="/login">Login here</a></p>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Sign up') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endguest

    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="/images/update" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-10 mx-auto">
                                <textarea class="form-control" rows="4" name="caption" placeholder="Post a new image"></textarea>

                                <div class="mt-4 d-flex justify-content-between ">
                                    <input type="file" name="image"></input>
                                    <button class="btn btn-success">Post</button>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger mt-4">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-6 mx-auto">

            <div class="card">
                <div class="card-header">
                    News Feed
                </div>

                <div class="card-body">
                    <p><a href="">Alex Garrett</a></p>

                    <p>Caption will go right here</p>

                    <img src="{{ asset('images/hero_image.jpg') }}" class="col-12 m-0 p-0">
                </div>
            </div>
        </div>
    </div>
@endsection
