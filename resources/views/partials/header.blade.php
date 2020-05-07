
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="/"> <i class="fa fa-500px" style="color: orange"></i> Brand</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">    <i class="fa fa-shopping-cart" style="color: orange"></i>  Shopping Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" style="color: orange"></i> User Management
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('register') }}"><i class="fa fa-check" style="color: orange"></i>  Register</a>
            <a class="dropdown-item" href="{{ route('login') }}"> <i class="fa fa-sign-in" aria-hidden="true" style="color: orange"></i>&nbsp; Login</a>
            <a class="dropdown-item" href="home"> <i class="fa fa-user" aria-hidden="true" style="color: orange"></i>&nbsp; Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </div>
        </li>

      </ul>

    </div>
  </nav>
