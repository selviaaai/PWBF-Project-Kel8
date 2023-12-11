<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/styleSignIn.css">

    <!-- <title>Login #2</title> -->
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/img/pictLogin.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Find Your Pet</strong></h3>
            <p class="mb-4">Login Here if you want adopt a pets</p>
            <form action="/signIn" method="post">
                @csrf
              <div class="form-group first mb-3">
                @if (session()->has('fail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('fail')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                <label for="username mg-2">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
              </div>

              <div class="row mb-0">
                <div class="col d-flex mb-3 justify-content-center">
                <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                  </div>
                </div>
             </div>
             <div class="d-grid gap-2 mt-2">
                <button class="btn btn-warning" type="submit">Sign In</button>
              </div>
             <!-- <button type="submit" class="btn btn-warning mb-4">Sign in</button> -->
              <!-- <div class="d-flex mb-4 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div> -->
              <!-- <input type="submit" value="Sign In" class="btn btn-block btn-primary">
              <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
              <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button> -->
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/signUp"
                class="link-danger">Sign Up</a></p>
            </form>
            <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-10 me-2"><strong> Don't have an account?</strong></p>
                    <button type="button" class="btn btn-outline-warning">Sign Up</button>
                  </div> -->
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrapSignIn.min.js"></script>
    <script src="js/mainSignIn.js"></script>
  </body>
</html>
