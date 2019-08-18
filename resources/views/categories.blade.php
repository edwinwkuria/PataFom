@extends('layouts.app')

@section('content')


  <!-- Page Content -->
  <div class="container">

    <div class="row">
      @include('Event.eventmenu')
      <!-- /.col-lg-3 -->
      @include('layouts.carousel')

        <div class="row">
                     @foreach ($events as $event)
                     @foreach ($event->events as $eventdetails )
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="Event/{{ $eventdetails -> id}}">
                @foreach($event->eventphoto as $eventphoto)<img class="card-img-top" src="/{{$eventphoto->filename}} "alt=""></a>@endforeach
              <div class="card-body-fluid">
                <div class="col-lg-3 col-md-3">
                  <h2>{{ $eventdetails->id}}</h2>
                  <p class="text-center" >12</p>
                </div>@endforeach
                <div class="col-lg-9 col-md-9">
                <h4 class="card-title">
                  <a href="Event/{{ $eventdetails -> id}}">{{ $eventdetails -> eventname}}</a>
                </h4>
                <h5>Ksh. {{$eventdetails-> eventcost}}/=</h5>
                <h5> <i class="glyphicon glyphicon-pushpin"></i>{{$eventdetails -> eventlocation }}</h5>
                </div>
              </div>
              <div class="card-footer">
            <a onclick="event.preventDefault();document.getElementById('register-form-{{ $event->id}}').submit();">
              + Register
            </a>
            @guest

            @else
            <form id="register-form-{{ $event->id}}" action="/EventUser" method="POST" style="display: none;"> 
              @csrf
              <input type="hidden" name="event_id" id="event_id" value="{{ $event->id}}">
              <input type="hidden" name="user_id" id="user_id" value="{{  Auth::user()->id }}">
            </form>
            @endguest
              </div>
            </div>
          </div>

          @endforeach

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection