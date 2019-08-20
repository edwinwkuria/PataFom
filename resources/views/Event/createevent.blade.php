@extends('layouts.app')

@section('content')
<!--<div class="container">-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Just a few details from you and we will have your event registered</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/Event"> 
                        @csrf

                        <div class="form-group">
                          <label class="control-label col-sm-3">Event Name <span class="text-danger">*</span></label>
                          <div class="col-md-8 col-sm-9">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Title of the event" name="eventname" id="eventname" value="{{ old('eventname') }}">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3">Event location <span class="text-danger">*</span></label>
                          <div class="col-md-8 col-sm-9">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                            <input type="text" class="form-control" placeholder="Eg KICC Tsavo Boardroom" name="eventlocation" id="eventlocation" value="{{ old('eventlocation') }}">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3">Event cost <span class="text-danger">*</span></label>
                        <div class="col-md-8 col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input type="text" class="form-control" placeholder="Eg 50000.00" name="eventcost" id="eventcost" value="{{ old('eventcost') }}">
                             </div>
                        </div>
                        </div>

                                    <div class="form-group">
                      <label class="control-label col-sm-3">Date of Event <span class="text-danger">*</span></label>
                      <div class="col-xs-8">
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

                        <div class="form-group">
                          <label class="control-label col-sm-3">Available seats <span class="text-danger">*</span></label>
                          <div class="col-md-5 col-sm-8">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" class="form-control"placeholder="Eg 200" name="eventseats" id="eventseats" value="{{ old('eventseats') }}">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Event Organizer <br></label>
                          <div class="col-md-5 col-sm-8">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" class="form-control" placeholder="Eg Kenya events" name="eventorganizer" id="eventorganizer" value="{{ old('eventorganizer') }}">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3">Contact Email <span class="text-danger">*</span></label>
                          <div class="col-md-5 col-sm-8">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input type="text" class="form-control" name="eventcontactemail" id="eventcontactemail" placeholder="Eg david@kenyaevents.co.ke" value="{{ old('eventcontactemail') }}">
                           </div>   
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3">Contact Phone Number <span class="text-danger">*</span></label>
                          <div class="col-md-5 col-sm-8">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input type="text" class="form-control" name="eventcontactphone" id="eventcontactphone" placeholder="Eg 0789234345" value="{{ old('eventcontactphone') }}">
                            </div>  
                          </div>
                        </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Event Description: </label>
              <textarea class="form-control col-sm-9 " rows="3" id="eventdescription" name="eventdescription" placeholder=
              "Please enter a write up about your event" value="{{ old('eventdescription') }}"></textarea>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-3">Event categories :</label>
            @foreach($categories as $category)   
                <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="category" name="category[]"  value="{{ $category-> categoryid}}">
                  <label>{{ $category->categoryName}}</label>
                </div>
              @endforeach 
            </div>
            <div class="form-control-group">  
                <span class="control-label col-sm-3">Upload</span>
              <div class="form-control col-sm-9 ">
                <input type="file" class="custom-file-input" name="photos" id="photos" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

        <div class="form-group">
          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Create Event, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-10">
            <input name="Submit" type="submit" value="Create Event" class="btn btn-primary">
          </div>
        </div>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
