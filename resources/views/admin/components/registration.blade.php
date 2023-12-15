@extends('admin.layout.app')
@push('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container">

        <form class="form-signin" action="http://thevectorlab.net/flatlab/index.html">
            <h2 class="form-signin-heading">registration now</h2>
            <div class="login-wrap">
                <p>Enter your personal details below</p>
                <input type="text" class="form-control" placeholder="Full Name" autofocus>
                <input type="text" class="form-control" placeholder="Address" autofocus>
                <input type="text" class="form-control" placeholder="Email" autofocus>
                <input type="text" class="form-control" placeholder="City/Town" autofocus>
                <div class="radios">
                    <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                        <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Male
                    </label>
                    <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                        <input name="sample-radio" id="radio-02" value="1" type="radio" /> Female
                    </label>
                </div>

                <p> Enter your account details below</p>
                <input type="text" class="form-control" placeholder="User Name" autofocus>
                <input type="password" class="form-control" placeholder="Password">
                <input type="password" class="form-control" placeholder="Re-type Password">
                <label class="checkbox">
                    <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

                <div class="registration">
                    Already Registered.
                    <a class="" href="login.html">
                        Login
                    </a>
                </div>

            </div>

        </form>

    </div>
@endsection
