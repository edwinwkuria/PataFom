<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container"> 
    <a class="navbar-brand" href="{{ url('/') }}">
    {{ ('PataFom') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!--Left Side Of Navbar -->

      <ul class="nav justify-content-end">
        @guest
        <li class="nav-item">
          <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </li>
    
    <!--Authentication Links-->
      <li class="nav-item">

      <a class="nav-link" href="/eventOrganizer/create"> Event Organizer</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}"> Log in  </a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">Sign up</a>
      </li>
      @endif
      @else
      @if(Auth::user()->userType==1)
      <a href="/Event/create">
      <button class="btn btn-success" type="submit">Add Event</button>
      </a>
      @endif
      <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      <i class="glyphicon glyphicon-user">
      {{ Auth::user()->email }}  {{ Auth::user()->lastname }}</i>
      </a>

          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
          </a></li>
          <li class='divider'></li>
          @if(Auth::user()->userType==1)
          <li><a class="dropdown-item" href="#">
          Manage events
          </a></li>
          <li><a class="dropdown-item" href="#">
          Manage employees
          @else
          </a></li>
          <li><a class="dropdown-item" href="#">
          View upcoming events
          </a></li>
          <li><a class="dropdown-item" href="/EventUser/{{ Auth::user()->id}}">
          View Events
          </a></li>
          @endif
          <li class='divider'></li>
          <li><a class="dropdown-item" href="/User/{{ Auth::user()->id }}">
          View Profile
          </a></li>
          <li><a class="dropdown-item" href="/User/{{ Auth::user()->id }}/edit">
          Edit profile
          </a></li>
          <li><a class="dropdown-item" href="#">
          Delete Profile
          </a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
          </ul>
      @endguest
    </ul>
    </div>
  </div>
</nav>