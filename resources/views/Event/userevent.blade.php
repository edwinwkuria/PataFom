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
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Organizer</th>
      <th scope="col">Contact Email</th>
    </tr>
  </thead>
  <tbody>

      @foreach($userevents as $userevent)
      <tr>
      @foreach($userevent ->events as $event)
      <th scope="row">{{$event -> eventname}}</th>
      <td>{{ $event -> eventlocation }}</td>
      <td>{{$event -> eventdate}}</td>
      <td>{{$event ->  eventorganizer}}</td>
      <td>{{$event -> eventcontactemail }}</td>
      </tr>
      @endforeach
      @endforeach

  </tbody>
</table>
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
