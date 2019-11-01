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
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="Event/{{ $event -> id}}"><img class="card-img-top" src="{{$event -> eventphoto['filename']}} " alt=""></a>
              <div class="card-body-fluid">
                <div class="col-lg-3 col-md-3">
                  <h2>{{ $event->id}}</h2>
                  <p class="text-center" >12</p>
                </div>
                <div class="col-lg-9 col-md-9">
                <h4 class="card-title">
                  <a href="Event/{{ $event -> id}}">{{ $event-> eventname }}</a>
                </h4>
                @if ($event-> eventcost == 0)
                <h5>Free</h5>
                @else
                <h5>Ksh. {{$event-> eventcost}}/=</h5>
                @endif
                <h5> <i class="glyphicon glyphicon-pushpin"></i>{{ $event-> eventlocation }}</h5>
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