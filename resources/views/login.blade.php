<!DOCTYPE html>
<html>
<head>
  <title>{{$title}}</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="body-login">
  <div class="container container-login" style="max-width: 20rem;">
    @if (session()->has('loginError'))        
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Login Gagal!</strong> {{session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <h2 class="h2-login">Login</h2>
    <form action="/" method="POST">
      @csrf
      <label for="username">Email</label>
      <input class="input-login" type="email" id="email" name="email" placeholder="Masukkan Email">
      <label for="password">Password:</label>
      <input class="input-login" type="password" id="password" name="password" placeholder="Masukkan password">
      
      <button class="button-login" type="submit">Login</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
