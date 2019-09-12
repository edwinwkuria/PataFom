@extends('layouts.app')

@section('content')
<!--<div class="container">-->
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Please log in or register to create your event</div>

                <div class="row">
                <div class="col-md-6 login-form-1">
                    <h5>Login </h4>
                    <form action="/eventOrganizerLogin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email"/>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h5>Create account </h5>
                    <form action="/eventOrganizer" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Company/Organizing company</label>
                            <input type="text" class="form-control" name="organizerName" id="organizerName"/>
                        </div>
                        <div class="form-group">
                          <label>Company/Organization Email
                            <input type="text " class="form-control" name="organizerEmail" id="organizerEmail"/>
                        </div>
                        <div class="form-group">
                          <label>Contact person email
                            <input type="text" class="form-control" name="organizerEmail2" id="organizerEmail2"/>
                        </div>
                        <div class="form-group">
                          <label>Organization Phone Number
                            <input type="text" class="form-control" name="organizerPhone" id="organizerPhone"/>
                        </div>
                        <div class="form-group">
                          <label>Alt Phone Number
                            <input type="text" class="form-control" name="organizerPhone2" id="organizerPhone2"/>
                        </div>
                        <div class="form-group">
                          <label>Set Password
                            <input type="password" class="form-control" name="password" id="password"/>
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btnSubmit" value="Sign Up" />
                        </div>
                    </form>
                </div>
            </div>    
            </div>
        </div>
    </div>
</div>
@endsection
