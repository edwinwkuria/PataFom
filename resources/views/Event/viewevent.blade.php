@extends('layouts.app')

@section('content')
  <!-- Navigation --><!--
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>-->

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      @include('Event.eventmenu')  
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="col-lg-7">
          <img class="card-img-top" src="/{{$showevent -> eventphoto-> filename}}" alt="">
        </div>
        <div class="col-lg-5">
          <div class="col-lg-3 col-md-3">
                  <h2>Jul</h2>
                  <p>12</p>
          </div>
          <div class="col-lg-9 col-md-9">
                <h4>{{ $showevent-> eventname }}</h4>
                <h5>
                  @if ($showevent-> eventcost == 0)
                  Free
                  @else
                  Ksh. {{$showevent-> eventcost}}/=
                  @endif
                </h5>
                <h5> <i class="glyphicon glyphicon-pushpin"></i>{{ $showevent-> eventlocation }}</h5>
          </div>
          <div class="col-lg-12">
            <h6><strong>Organized by: </strong></h6>
            <h4>{{$showevent-> eventorganizer}}</h4>
            <p class="card-text">{{ $showevent -> eventdescription }}</p>
            <h6><strong>Event organizer contact</strong></h6>
            <p>{{$showevent-> eventcontactemail}}</p>
            <h6><strong>Seat availability</strong></h6>
            $x = 60;
            <div class="progress">
            <div class="progress-bar" style="width: 80%;">
                $x
            </div>
            </div>
            {{$showevent-> eventseats}}
          </div>
        </div>
        <!-- /.card -->
        <div class="col-lg-12">
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            @forelse($showevent ->comments as $comment)
            <p>{{ $comment-> comment}}</p>
            <small class="text-muted">Posted by Anonymous on {{ $comment -> created_at }}</small>
            @empty
            <p>No comments</p>
            @endforelse
            <form method="POST" action="/comment">
              @csrf
            <div class="form-group">
              <input type="text" name="event_id" id="event_id" value="{{ $showevent-> id}}" hidden>
              <textarea class="form-control col-sm-12 " rows="3" id="comment" name="comment" placeholder=
              "Leave a question or comment about the event" value="{{ old('eventdescription') }}"></textarea>
            </div>
            <button class="btn btn-success" type="submit"> Submit </button>
          </form>
          </div>
        </div>
      </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

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
