@extends('admin.adminLayout')
@section('content')


{{--  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}


<form  action="{{ route('register') }}" method="POST" >
@foreach($errors->all() as $error)
    <h1>{{ $error }}</h1>
@endforeach
    @csrf
    <fieldset>
        <legend>Sign up</legend>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"
                   class="form-control"
                   id="exampleInputEmail1"
                   name="email"
                   placeholder="Enter email" />
        </div>
        <div class="form-group">
            <label for="exampleInputFirstName1">First Name</label>
            <input type="text"
                   class="form-control"
                   id="exampleInputFirstName1"
                   name="firstName"
                   placeholder="Enter First Name" />
        </div>
        <div class="form-group">
            <label for="exampleInputLastName1">Last Name</label>
            <input type="text"
                   class="form-control"
                   id="exampleInputLastName1"
                   name="lastName"
                   placeholder="Enter Last Name" />
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password"
                   class="form-control"
                   id="exampleInputPassword1"
                   name="password"
                   placeholder="Password" />
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1">Confirm Password</label>
            <input type="password"
                   class="form-control"
                   id="exampleInputConfirmassword1"
                   name="password_confirmation"
                   placeholder="Password" />
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </fieldset>
</form>
@endsection
