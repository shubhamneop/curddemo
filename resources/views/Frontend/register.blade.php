@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" data-parsley-validate id="register">
                        @csrf

                             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row" >
                               <label for="name" class="col-md-4 control-label">Name</label>
                               <div class="col-md-6">
                               
                                   <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus data-parsley-pattern="/^[a-zA-Z]+([-_\s]{1}[a-zA-Z]+)*$/i" data-parsley-trigger="change">
                                
                                   @if ($errors->has('name'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('name') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                           
                           
                            <div class="form-group row">
                               <label for="email" class="col-md-4 control-label">E-Mail </label>
                               <div class="col-md-6">
                                  
                           <input type="email" name="email" class="form-control" value="{{ Request::old('email') }}" placeholder="Email Id " data-parsley-required="true" data-parsley-trigger="change focusout" data-parsley-class-handler="#emailError" data-parsley-required-message="Email is required" data-parsley-pattern="/^[a-z][a-zA-Z0-9_]*(\.[a-zA-Z][a-zA-Z0-9_]*)?@[a-z][a-zA-Z-0-9]*\.[a-z]+(\.[a-z]+)?$/">
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
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>
   

@endsection
