@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
  <style>
    /* Stackoverflow preview fix, please ignore */
    .navbar-nav {
      flex-direction: row;
    }
    
    .container{
        max-height: 100%;
        margin: 0 auto;
    }
    
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link">Left Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">Left Link 2</a>
    </li>
  </ul>
  
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
