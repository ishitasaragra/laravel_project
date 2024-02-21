
@extends('website.layout.structure')


@section('main_container')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Login</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Login </p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Login Here</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="login-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form action="{{url('/login_auth')}}" method="post" name=""  novalidate="novalidate">
                            
                            @csrf   
                                <div class="control-group">
                                    <input type="email" class="form-control p-4" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control p-4" name="password" placeholder="Password " required="required" data-validation-required-message="Please enter password" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            
                           
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" name="submit">Login</button><br>
                                <a class="float-left" href="signup">If you not Register then click Signup</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection