<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Login</title>
</head>

<body class="">
  <div class="container">
    <div class="col-md-6 col-10 m-auto rounded p-3 border border-secondary" style="top: 15vh">
      <h1 class="text-dark text-center">Login</h1>
      <form>
        <div class="form-group">
          <label for="staticEmail" class="text-dark col-sm-2 col-form-label d-block">Email</label>
          <div class="col-sm-12 d-block">
            <input type="text" class="badge-pill m-auto form-control bg-transparent border border-dark" id="staticEmail" value="email@example.com">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="text-dark col-sm-2 col-form-label d-block">Password</label>
          <div class="col-sm-12 d-block">
            <input type="password" class="badge-pill m-auto form-control bg-transparent border border-dark" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <div class="col-12 row m-auto">
          <div class="col-md-6 col-12 p-1">
            <button type="submit" class="btn btn-outline-secondary col-12">batal</button>
          </div>
          <div class="col-md-6 col-12 p-1">
            <button type="submit" class="btn btn-info col-12">login</button>
          </div>
          <a href="<?= base_url('LoginAuth/register_user')?>" class="nav-link">Belum punya akun?</a>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>