<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('chisiamo')}}">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('articoli')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
          </li>
            @auth

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefalut(); getElementById('form-logout').submit();">Esci</a>
              <form method="POST" action="/logout" id="form-logout">
                @csrf
              </form>
              </li>
            </ul>
          </li>

          @endauth
          
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
          @endguest
        </ul>


      </div>
    </div>
  </nav>