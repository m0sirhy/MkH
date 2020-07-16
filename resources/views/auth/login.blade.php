@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>

    <div class="container-indent">
        <div class="container">
            <h1 class="tt-title-subpages noborder">ALREADY REGISTERED?</h1>
            <div class="tt-login-form">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="tt-item">
                            <h2 class="tt-title">NEW CUSTOMER</h2>
                            <p>
                                By creating an account with our store, you will be able to move through the checkout
                                process faster, store multiple shipping addresses, view and track your orders in your
                                account and more.
                            </p>
                            <div class="form-group">
                                <a href="{{ __('register') }}" class="btn btn-top btn-border">CREATE AN ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="tt-item">
                            <h2 class="tt-title">LOGIN</h2>
                            If you have an account with us, please log in.
                            <div class="form-default form-top">
                                <form id="customer_login" method="post" action="{{ route('login') }}"
                                      novalidate="novalidate">
                                    @csrf
                                    <div class="form-group">
                                        <label for="loginInputName">USERNAME OR E-MAIL *</label>
                                        <div class="tt-required">* Required Fields</div>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror " id="loginInputName"
                                               placeholder="Enter Username or E-mail">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="loginInputEmail">PASSWORD *</label>
                                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror  " id="loginInputEmail"
                                               placeholder="Enter Password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-auto mr-auto">
                                            <div class="form-group">
                                                <button class="btn btn-border" type="submit">LOGIN</button>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-end">
                                            <div class="form-group">
                                                <ul class="additional-links">
                                                    <li><a href="#">Lost your password?</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
