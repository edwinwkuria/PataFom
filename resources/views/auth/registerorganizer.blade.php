@extends('layouts.app')

@section('content')
<!--<div class="container">-->
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Just a few details and we will have your company registered as an events organizer</div>

                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="userType" id="userType" value="1" hidden>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Name of the company/Organization</label>
                            <input type="text" class="form-control" name="companyName" id="companyName"/>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Company/Organization Email</label>
                            <input type="text " class="form-control" name="companyEmail" id="companyEmail"/>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-2">
                          <label>Country</label>
                            <input type="text" class="form-control" name="companyCountry" id="companyCountry"/>
                        </div>
                        <div class="form-group col-md-5">
                          <label>Organization Phone Number</label>
                            <input type="text" class="form-control" name="companyPhoneNumber" id="companyPhoneNumber"/>
                        </div>
                        
                        <div class="form-group col-md-5">
                          <label>Alternative Phone Number</label>
                            <input type="text" class="form-control" name="companyPhoneNumber2" id="companyPhoneNumber2"/>
                        </div>
                        </div>
                        <div class="form-group">
                          <label>A brief description of the organization</label>
                            <textarea class="form-control" name="companyProfile" id="companyProfile"/>
                        </textarea>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                          <label>Administrator Email</label>
                            <input type="email" class="form-control" name="email" id="email"/>
                        </div>
                        <div class="form-group col-md-3">
                          <label>Administrator First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"/>
                        </div>
                        <div class="form-group col-md-3">
                          <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"/>
                        </div>
                        <div class="form-group col-md-2">
                          <label>Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" id="PhoneNumber"/>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-5">
                          <label>Administrator Password</label>
                            <input type="password" class="form-control" name="password" id="password"/>
                        </div>
                        <div class="form-group col-md-5">
                          <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password" id="password"/>
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" action="submit" class="btn btn-primary">
                            Create Account
                            </button>
                        </div>
                    </form>
                    </div>
            </div>    
            </div>
        </div>
    </div>
</div>
@endsection
