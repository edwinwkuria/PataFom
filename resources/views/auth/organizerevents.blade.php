@extends('layouts.app')

    @section('content')


  <!-- Page Content -->
  <div class="container">
    <div class="row">  
      <a href="Event/create"><button class="primary">Create Event</button></a>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Seats</th>
      <th scope="col">Event Cost</th>
    </tr>
  </thead>
  <tbody>
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
