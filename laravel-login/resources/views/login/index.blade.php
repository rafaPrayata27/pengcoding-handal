
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                   <strong><li>{{ $item }}</li></strong>
                @endforeach
            </ul>
            <meta http-equiv="refresh" content="3;url=/index">
        </div>

        @endif
      
        @if (Session::has('success'))
      <div class="pt-3">
        <div class="alert alert-success">
          {{ Session::get('success') }}
    
        </div>
      </div>
    @endif
    <div class="card" style="width:600px; height:130px; margin-top:20%; margin-left:25%;">
    <form class="row g-3" method="POST" action="index/home">
        @csrf
        <h3>Login</h3>
        <div class="col-auto">
          <label for="staticEmail2" class="visually-hidden">Email</label>
          <input type="email" class="form-control mt-2" value="{{ Session::get('email') }}" name="email" id="staticEmail2" placeholder="@">
        </div>
        <div class="col-auto">
          <label for="inputPassword2" class="visually-hidden">Password</label>
          <input type="password" class="form-control mt-2" id="inputPassword2" name="password" placeholder="Password">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mt-2">Confirm identity</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>