@extends('layouts.app')

@section('content')
<!--<div class="container">-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View profile</div>

                <div class="card-body">
                    <form class="form-horizontal"> 

                        <div class="row">
                          <div class="form-group col-md-6">
                          <label class="control-label col-sm-4">First Name <span class="text-danger">*</span></label>
                          <div class="col-md-8">
                            <div class="input-group">
                            <input type="name" class="form-control" name="firstname" id="firstname" value="{{ $user ->firstname }}" readonly>
                            </div>
                          </div>
                        </div>

                        <div class="form-group col-md-6">
                          <label class="control-label col-sm-4">Last Name <span class="text-danger">*</span></label>
                          <div class="col-md-8">
                            <div class="input-group">
                            <input type="name" class="form-control" name="lastname" id="lastname" value="{{ $user ->lastname }}" readonly>
                            </div>
                          </div>
                        </div>
                      </div>

                        <div class="form-row">
                        <div class="form-group col-md-5">
                          <label class="control-label col-sm-4">Email <span class="text-danger">*</span></label>
                        <div class="col-md-8">
                              <div class="input-group">
                              <input type="text" class="form-control" name="email" id="email" value="{{ $user ->email }}" readonly>
                             </div>
                        </div>
                        </div>

                        <div class="form-group col-md-4">
                          <label class="control-label col-sm-4">Phone<span class="text-danger">*</span></label>
                          <div class="col-md-8">
                            <div class="input-group">
                            <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="{{ $user ->phonenumber }}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-3">
                          <label class="control-label col-sm-3">Alt. <br></label>
                          <div class="col-md-9">
                            <div class="input-group">
                            <input type="text" class="form-control" name="altphonenumber" id="altphonenumber" value="{{ $user ->altphonenumber }}" readonly>
                            </div>
                          </div>
                        </div>
                      </div>

        <div class="form-row">
        <div class="form-group col-md-6">
          <label class="control-label col-md-5">Date of Birth </label>
          <div class="col-md-7">
            <div class="form-inline">
              <div class="form-group">
                <select name="dd" class="form-control">
                  <option value="">Date</option>
                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
              </div>
              <div class="form-group">
                <select name="mm" class="form-control">
                  <option value="">Month</option>
                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control">
                  <option value="0">Year</option>
                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group col-md-6">
          <label class="control-label col-sm-3">Gender</label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="gender" type="radio" value="Male" checked readonly>
            Male </label>
               
            <label>
            <input name="gender" type="radio" value="Female" readonly >
            Female </label>
          </div>
        </div>
      </div>

            <div class="form-row">
            <div class="form-group col-md-4">
              <label class="control-label col-sm-5">Occupation </span></label>
            <div class="col-md-7">
                  <div class="input-group">
                  <input type="text" class="form-control" name="occupation" id="occupation" value="{{ $user ->occupation }}" readonly>
                 </div>
            </div>
            </div>

            <div class="form-group col-md-4">
              <label class="control-label col-sm-4">Location<span class="text-danger">*</span></label>
              <div class="col-md-8">
                <div class="input-group">
                <input type="text" class="form-control" name="location" id="location" value="{{ $user ->location }}" readonly>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label col-sm-4">School <br></label>
              <div class="col-md-8">
                <div class="input-group">
                <input type="text" class="form-control" name="school" id="school" value="{{ $user ->school }}" readonly>
                </div>
              </div>
            </div>
          </div>

          <p>Please select categories you are intrested in:</p>
            @foreach($categories as $category)
                  @if(in_array($category->categoryid, $usercategories))      
                <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="category" name="category[]"  value="{{ $category-> categoryid}}" checked disabled>
                  <label class="form-check-label" for="inlineCheckbox1">{{ $category->categoryName}}</label>
                </div>
                  @else
                                <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="category" name="category[]"  value="{{ $category-> categoryid}}" disabled>
                  <label class="form-check-label" for="inlineCheckbox1">{{ $category->categoryName}}</label>
                </div>
                 @endif
              @endforeach
            </form>

        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <a href="/User/{{ Auth::user()->id }}/edit"><button value="Edit Profile" class="btn btn-primary">Edit Profile </button></a>

            <a onclick="event.preventDefault();document.getElementById('Delete-form').submit();"><button value="Edit Profile" class="btn btn-danger">Delete Profile </button></a>
            <form id="Delete-form" action="/User/{{ Auth::user()->id}}" method="POST" style="display: none;"> 
              @method('DELETE')
            @csrf</form>
          </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
