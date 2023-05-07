@extends('layouts.guest')

@section('links')
     {{-- Toastr message link  --}}
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
@endsection

@section('login&register')
    
  
<div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
                          <!-- Session Status -->
                        <x-auth-session-status :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors :errors="$errors" />
                        <div class="p-3">
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Email-Address">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        @endif
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="{{route('register')}}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
</div>
<!-- end container -->
      
@endsection

@push('scripts')
     {{-- Toastr js link --}}
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     {{-- Toastr message Code --}}
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
    </script>
@endpush