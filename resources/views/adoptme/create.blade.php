<!doctype html>
<html lang="en">
  <head>
  	<title>adopt me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/styleSignUp.css">

	</head>
	<body>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 d-flex img d-flex align-items-end" style="background-image: url('../assets/img/adopt.jpg');">
							<div class="text w-100">
								<h2 class="mb-1">Helo! Fill in this form for adoption</h2>
								<p>If you are logged in, then all you have to do is fill in your address and pick-up date for your favorite animal.</p>
							</div>
			      		</div>
						<div class="login-wrap p-4 p-md-5">
	      					<h2 class="mb-3">Form for Adoption</h2>
							<form action="{{route('adoptme.store')}}" class="signup-form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
										<!-- <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" /> -->
					      				<label class="label" for="fullname">FullName</label>
					      				<input type="text" class="form-control" placeholder="Full Name" name="fullname" value="{{Auth::user()->fullname}}">
										<!-- <div class="invalid-feedback" data-sb-feedback="fullname:required">A name is required.</div> -->
					      				</div>
									</div>
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
										<!-- <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
										<label for="email">Email address</label> -->
					      				<label class="label" for="email">Email</label>
					      				<input type="text" class="form-control" placeholder="your-email@email.com" name="email" value="{{Auth::user()->email}}">
										<!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                		<div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
					      			</div>
									</div>
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
					      			<label class="label" for="phone">Phone Number</label>
					      			<input type="text" class="form-control" placeholder="+62" name="phone_number" value="{{Auth::user()->phone_number}}">
					      		</div>
									</div>
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
					      			<label class="label" for="email">Username</label>
					      			<input type="text" class="form-control" placeholder="Your Username" name="username" value="{{Auth::user()->username}}">
					      		</div>
									</div>
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
				            	<label class="label" for="password">Password</label>
				              <input type="password" class="form-control" placeholder="Password" name="password" value={{Auth::user()->password}}>
				            </div>
									</div>
                                <div class="col-md-12">
									<div class="form-group d-flex align-items-center">
				            	        <label class="label" for="address">Address</label>
				                        <input type="text" class="form-control" placeholder="Your Address" name="alamat" value={{Auth::user()->alamat}}>
				                    </div>
								</div>
                                <div class="form-group">
                                    <label for="">Nama Hewan</label>
                                    <select name="id" id="">
                                        <option value="">Pilih nama Hewan</option>
                                        @foreach ($hewan as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
									<div class="form-group d-flex align-items-center ">
				            	        <label class="label" for="datepick">Date to Pick Up</label>
                                    <div class="col-md-10">
                                        <input type="date" class="form-control">
                                    </div>
				                    </div>
                                    </div>


                                    </div>

									<!-- <div class="col-md-12 my-4">
										<div class="form-group">


				            	<div class="w-100">
					            	<label class="checkbox-wrap checkbox-primary">I agree all statements in terms of service
												  <input type="checkbox" checked>
												  <span class="checkmark"></span>
												</label>
											</div>
				            </div>
									</div> -->
									<div class="col-md-12">
										<div class="form-group d-flex align-items-center">
										<button type="submit" class="btn btn-dark rounded-pill p-3" data-bs-toggle="modal" data-bs-target="#adopt">
                						Adopt
              							</button>
										<div class="modal fade" id="adopt" tabindex="-1">
                								<div class="modal-dialog">
                  								<div class="modal-content">
                    								<div class="modal-header">
                     								 <h5 class="modal-title align-items-center">Success</h5>
                     								 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    								</div>
                   								 <div class="modal-body">
                      								Your adoption process has been successful and is being validated by the admin.
                    							</div>
                   						 			<div class="modal-footer">
                      								<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                      								<a href="/userhome"><button type="button" class="btn btn-dark rounded-pill p-3">Okay!</button></a>
                   									</div>
                  								</div>
                								</div>
              							</div>
				           			 	</div>


									<!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/adoptme"><button type="button" class="btn btn-primary">Adopt me?</button></a> -->
      							</div>
							</div>

		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>

