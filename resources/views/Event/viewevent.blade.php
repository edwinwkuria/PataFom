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
                <h5>Ksh. {{$showevent-> eventcost}}/=</h5>
                <h5> <i class="glyphicon glyphicon-pushpin"></i>{{ $showevent-> eventlocation }}</h5>
          </div>
          <div class="col-lg-12">
            <h6><strong>Organized by: </strong></h6>
            <h4>{{$showevent-> eventorganizer}}</h4>
            <p class="card-text">{{ $showevent -> eventdescription }}</p>
            <h6><strong>Event organizer contact</strong></h6>
            <p>{{$showevent-> eventcontactemail}}</p>

            {{$showevent-> eventseats}}
          </div>
        </div>
        <!-- /.card -->
        <div class="col-lg-12">
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
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
