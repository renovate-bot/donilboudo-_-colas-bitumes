<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colas Bitumes</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
          <a class="navbar-brand" href="{{ url('/') }}">Colas Bitumes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/')}}">Delivery Process <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="{{ route('suppliers.index')}}">Billing Process</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1">Configuration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/uploadfile')}}">Import</a>
              </li>
            </ul>
            <div class="form-inline mt-2 mt-md-0 loggedin-user">
                <h6>Welcome Fabrice</h6>
            </div>
          </div>
        </nav>
    </header>
    <main>
        <div class="container">
            @yield('main')
        </div>
    </main>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>