@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header">Administrator Login</div>

                <div class="card-body">
                    <form method="POST" class="form-group" action="{{ route('login') }}">
                        @csrf
                        <label for="email"> E-mail Address:</label>
                        <input type="email" name="email" class="form-control mb-2" value="{{old('email')}}" id="">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control mb-2">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button type="submit" class="btn btn-block btn-info">Login</button>
                        <a href="{{route('register')}}" class="href"> New Administrator</a>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
