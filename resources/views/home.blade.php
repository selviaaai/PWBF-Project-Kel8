<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Find Your Pet</title>
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <!-- font awesome icon -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/adoption"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#constructions">Pet Health Guide</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light"font-family:Merriweather Sans>
                      <li><a class="dropdown-item" href="#services">Adoption</a></li>
                      <li><a class="dropdown-item" href="#report">Your Report</a></li>
                    </ul>
                    </li>
                    <a class="btn btn-primary btn-sm" href="/signIn" role="button">Sign In</a>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Find Your Pets</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Welcome to Find Your Pets. We're all about getting homeless pets into homes.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">About Find Your Pets</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Find Your Pets is an online shelter that uses Internet technology and resources to produce searchable animals that need homes, Increase public awareness of the availability of adoptable pets, and
to Elevate the status of pets to that of family member</p>

                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Adoption</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5 d-flex justify-content-center">

<div class="row">
      @foreach($hewans as $hewan)
      <div class="col-sm-4">
          <div class="card">
              <img src="assets/img/{{$hewan->name}}.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Hello My Name is {{$hewan->name}}</p>
              <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#{{$hewan->name}}">Read more</a>
            </div>
          </div>
        </div>

        <!-- all modal -->
        <div class="modal fade" id="{{$hewan->name}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="card">
                    <img src="assets/img/{{$hewan->name}}.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title mb-3">{{$hewan->name}}!</h4>
                      <p class="card-text">Well hello there! My name is {{$hewan->name}}! I’m a very handsome boy that is looking for a home! I am currently at shelter! I get to go into playgroup everyday and play with many dogs! it’s seriously the BEST! I’m not sure what my past life was, but I lived in a shelter for 10 months?</p>
                      <h5 class="card-title mb-3">My Info!</h5>
                        <div class="row align-items-start">
                          <div class="col">
                            <p class="card-text">Breed : {{$hewan->breed}}</p>
                            <p class="card-text">Colour : {{$hewan->colour}}</p>
                            <p class="card-text">Age : {{$hewan->age}}</p>
                          </div>
                          <div class="col">
                            <p class="card-text">Weight : {{$hewan->weight}}kg</p>
                            <p class="card-text">Sex : {{$hewan->sex == true ? 'male' : 'female'}}</p>
                          </div>
                        </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="/adoptme" class="btn btn-primary">Adopt Me?</a>
              </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
</div>

<!-- <div class="row">
  <div class="col-sm-4">
    <div class="card">
        <img src="assets/img/boby.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Hello My Name is </p>
        <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#boby">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="assets/img/arthur.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Arthur</h5>
        <p class="card-text">Hello My Name is Arthur!</p>
        <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#Arthur">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
        <img src="assets/img/ciko.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ciko</h5>
        <p class="card-text">Hello My Name is Ciko!</p>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ciko">Read more</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
        <img src="assets/img/stiff.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Stiff</h5>
        <p class="card-text">Hello My Name is Stiff!</p>
        <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#stiff">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="assets/img/valen.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Valen</h5>
        <p class="card-text">Hello My Name is Valen!</p>
        <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#valen">Read more</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
        <img src="assets/img/puffy.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Puffy</h5>
        <p class="card-text">Hello My Name is Puffy!</p>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#puffy">Read more</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
        <img src="assets/img/yemia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Yemia</h5>
        <p class="card-text">Hello My Name is Yemia!</p>
        <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#yemia">Read more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <img src="assets/img/gery4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gery</h5>
        <p class="card-text">Hello My Name is Gery!</p>
        <a class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#gery">Read more</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
        <img src="assets/img/oci.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oci</h5>
        <p class="card-text">Hello My Name is Oci!</p>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#oci">Read more</a>
      </div>
    </div>
  </div>
</div> -->


<!-- modal ciko.. -->
<!-- <div class="modal fade" id="ciko" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
            <img src="assets/img/ciko.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title mb-3">Ciko!</h4>
              <p class="card-text">Well hello there! My name is Ciko! I’m a very handsome boy that is looking for a home! I am currently at shelter! I get to go into playgroup everyday and play with many dogs! it’s seriously the BEST! I’m not sure what my past life was, but I lived in a shelter for 10 months?</p>
              <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Domestic Cat</p>
                    <p class="card-text">Colour : Brown</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 2kg</p>
                    <p class="card-text">Sex : Male</p>
                  </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt Me?</button>
      </div>
      </div>
    </div>
  </div>
</div> -->

<!-- modal boby.. -->
<!-- <div class="modal fade" id="boby" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Facts About Me</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
            <img src="assets/img/boby.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title mb-3">!</h4>
              <p class="card-text">Deskripsi dari </p>
              <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : </p>
                    <p class="card-text">Colour : </p>
                    <p class="card-text">Age : </p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : kg</p>
                    <p class="card-text">Sex :


                    </p>
                  </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/signIn"><button type="button" class="btn btn-primary">Adopt me?</button></a>
      </div>
      </div>
    </div>
  </div>
</div> -->

<!-- modal Arthur.. -->
<!-- <div class="modal fade" id="Arthur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
            <img src="assets/img/arthur.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title mb-3">Arthur!</h4>
              <p class="card-text">He's got the looks, he's got the vibe, he's got it all! And then some. Arthur is more fun than a barrel of monkeys, especially if you are into high-energy and endlessly enthusiastic young cats.
              He has shown great potential and is quick to learn, especially if you have yummy treats. If you have experience with energetic adolescents and want a full-time buddy, Arthur the happy little cannonball just might be the perfect match.
              </p>
                  <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Snowshoe</p>
                    <p class="card-text">Colour : Brown with White</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 5kg</p>
                    <p class="card-text">Sex : Male</p>
                  </div>
                </div>
            </div>
      </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="/adoptme"><button type="button" class="btn btn-primary">Adopt me?</button></a>
      </div>
    </div>
  </div>
</div>
</div> -->



<!-- modal stiff -->
<!-- <div class="modal fade" id="stiff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
            <img src="assets/img/stiff.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title mb-3">Stiff!</h4>
              <p class="card-text">He's got the looks, he's got the vibe, he's got it all! And then some. Arthur is more fun than a barrel of monkeys, especially if you are into high-energy and endlessly enthusiastic young cats.
              He has shown great potential and is quick to learn, especially if you have yummy treats. If you have experience with energetic adolescents and want a full-time buddy, Arthur the happy little cannonball just might be the perfect match.
              </p>
              <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Snowshoe</p>
                    <p class="card-text">Colour : Brown with White</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 5kg</p>
                    <p class="card-text">Sex : Male</p>
                  </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt Me?</button>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- modal Valen -->
<!-- <div class="modal fade" id="valen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Facts About Me</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">
              <img src="assets/img/valen.jpg" class="card-img-top" alt="...">
              <h4 class="card-title mb-3">Valen!</h4>
              <p class="card-text">Valen is a good dog. She is well behaved in the house. She's sweet and affectionate and loves all humans.
              She can be good with other dogs if given the opportunity to properly introduce another dog. Public places where dogs are off leash aren't a good option generally.
              Valen needs a home where there's not a lot of change. She would do best in a single family home with outdoor space.
              </p>
                  <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Boston Terriere</p>
                    <p class="card-text">Colour : Brown-White</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 8,5kg</p>
                    <p class="card-text">Sex : Female</p>
                  </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt Me?</button>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- modal puffy -->
<!-- <div class="modal fade" id="puffy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">
              <img src="assets/img/puffy.jpg" class="card-img-top" alt="...">
              <h4 class="card-title mb-3">Puffy!</h4>
              <p class="card-text">Puffy loves to cuddle, lay on laps, and be wherever his owner is. Puffy is black and has been very loving with our baby, toddler, and other dog.
              He is house trained, comes when called, walks on leash, and can sit on command. We have been caring for Bruno for several weeks for a family member who is no longer able to keep him but need to find him a forever home.
              </p>
                  <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Kintamani Dog</p>
                    <p class="card-text">Colour : Black</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 7kg</p>
                    <p class="card-text">Sex : Male</p>
                  </div>
                </div>
            </div>
      <p class="modal-text"></p>
      <p class="modal-text-center">Breed  : Kintamani dog</p>
        <p class="modal-text">Colour : Black</p>
        <p class="modal-text">Age    : Young</p>
        <p class="modal-text">Weight : 7 kg</p>
        <p class="modal-text">Sex    : male</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt Me?</button>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- modal yemia -->
<!-- <div class="modal fade" id="yemia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">
              <img src="assets/img/yemia.jpg" class="card-img-top" alt="...">
              <h4 class="card-title mb-3">Yemia!</h4>
              <p class="card-text">Yemia is friendly, beautiful, playful, and has a strong deep bark. She lives toys. Yemia have
              </p>
                  <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Moggy</p>
                    <p class="card-text">Colour : Black-White</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 5kg</p>
                    <p class="card-text">Sex : Female</p>
                  </div>
                </div>
            </div>
       <p class="modal-text"></p>
      <p class="modal-text-center">Breed  : Moggy</p>
        <p class="modal-text">Colour : Black-White</p>
        <p class="modal-text">Age    : Young</p>
        <p class="modal-text">Weight : 5 kg</p>
        <p class="modal-text">Sex    : Female</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt Me?</button>
      </div>
    </div>
  </div>
</div> -->


<!-- modal Gery -->
<!-- <div class="modal fade" id="gery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">
            <img src="assets/img/gery4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title mb-3">Gery!</h4>
              <p class="card-text">Gery is a very handsome boy that is looking for a home! He is energetic, cheerful and loves children.
                Every day, we take Gery for a walk in the park so he can socialize with many people, including children
              </p>
                  <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Beagle</p>
                    <p class="card-text">Colour : Brown with White</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 4kg</p>
                    <p class="card-text">Sex : Male</p>
                  </div>
                </div>
            </div>
      </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt me?</button>
      </div>
    </div>
  </div>
</div>
</div> -->

<!-- modal oci -->
<!-- <div class="modal fade" id="oci" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facts About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card-body">
            <img src="assets/img/oci.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title mb-3">Oci!</h4>
              <p class="card-text">Oci is a very adorable boy! ciko really likes crowds, he is energetic and can mingle with many people.
                Ciko also has many dog ​​friends. Ciko has a cold allergy. So we have to give him more attention.
              </p>
                  <h5 class="card-title mb-3">My Info!</h5>
                <div class="row align-items-start">
                  <div class="col">
                    <p class="card-text">Breed : Pudel</p>
                    <p class="card-text">Colour : Brown</p>
                    <p class="card-text">Age : Young</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Weight : 4,5kg</p>
                    <p class="card-text">Sex : Male</p>
                  </div>
                </div>
            </div>
      </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adopt me?</button>
      </div>
    </div>
  </div>
</div>
</div> -->




  <!-- pop up adoption 3-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
        </section>
        <section class="page-section" id="report">
          <div class="container px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                  <div class="col-lg-8 col-xl-6 text-center">
                      <h2 class="mt-0 text-dark">Your Report</h2>
                      <hr class="divider" />
                      <p class="text-dark mb-5">Report the animal you find and attach the picture!</p>
                  </div>
              </div>
              <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                  <div class="col-lg-6">
                  <form action="/reportcreate" method="POST" enctype="multipart/form-data" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    @csrf
                          <!-- Name input-->
                          <div class="form-floating mb-3">
                              <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                              <label for="name">Full name</label>
                              <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                          </div>
                          <!-- Email address input-->
                          <div class="form-floating mb-3">
                              <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                              <label for="email">Email address</label>
                              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                              <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                          </div>
                          <!-- Phone number input-->
                          <div class="form-floating mb-3">
                              <input name="number" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                              <label for="phone">Phone number</label>
                              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                          </div>
                          <!-- Message input-->
                          <div class="form-floating mb-3">
                              <textarea name="message" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                              <label for="message">Message</label>
                              <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                          </div>
                            <!-- file input-->
                            <label for="message">Image link</label>
                          <div class="form-floating mb-3">
                          <input name="img_link" type="text" class="form-control" id="file">
                          </div>
                          <div class="d-grid">
                            <button class="btn btn-primary btn-xl" type="submit">Submit</button>
                          </div>
                          <!-- Submit success message-->
                          <!---->
                          <!-- This is what your users will see when the form-->
                          <!-- has successfully submitted-->
                          {{-- <div class="d-none" id="submitSuccessMessage">
                              <div class="text-center mb-3 text-light">
                                  <div class="fw-bolder">Form submission successful!</div>
                                  To activate this form, sign up please!
                                  <br />
                                  <a href=""></a>
                              </div>
                          </div> --}}
                          <!-- Submit error message-->
                          <!---->
                          <!-- This is what your users will see when there is-->
                          <!-- an error submitting the form-->
                          {{-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> --}}
                          <!-- Submit Button-->
                          {{-- <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div> --}}
                      </form>
                  </div>
              </div>
              <div class="row gx-4 gx-lg-5 justify-content-center">
                  <div class="col-lg-4 text-center mb-5 mb-lg-0">
                      <i class="bi bi-phone fs-2 mb-3" style="color: rgb(0, 0, 0);"></i>
                      <div class="text-dark">+62 123-4567-8910</div>
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


            </div>
        </section>

        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Selvi & Regyna</div></div>
        </footer>
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
