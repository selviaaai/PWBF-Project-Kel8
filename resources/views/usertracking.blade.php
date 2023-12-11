<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/usertracking.css" rel="stylesheet">
</head>
<body>
<section class="h-100 h-custom" style="background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%),url('https://images.unsplash.com/photo-1650036786401-30f469106781?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80'); background-size:cover; background-attachment: fixed; background-repeat: no-repeat;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
            <div class="card-body p-5">

              <p class="lead fw-bold mb-5" style="color: #f37a27;">Adoption Tracking</p>
              @foreach($adopts->where('user_id',Auth::user()->id) as $adopt)
              <div class="row">
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Date</p>
                  <p>{{ $adopt->created_at }}</p>
                </div>
                <div class="col mb-3">
                  <p class="small text-muted mb-1">Order No.</p>
                  <p>{{ $adopt->id }}</p>
                </div>
              </div>

              <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                <div class="row">
                  <div class="col-md-8 col-lg-6">
                    <p style="font-weight: bold; color:#f37a27" >Pet Name :</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    <p>{{ $adopt->Hewan['name'] }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-lg-6">
                    <p class="mb-0" style="font-weight: bold; color:#f37a27">Category :</p>
                  </div>
                  <div class="col-md-4 col-lg-3">
                    @foreach($kategori->where('id',$adopt->Hewan['kategoris_id']) as $kat)
                    <p class="mb-0">{{ $kat->name }}</p>
                  </div>
                </div>
              </div>

              {{-- <div class="row my-4">
                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                  <p class="lead fw-bold mb-0" style="color: #f37a27;">£262.99</p>
                </div>
              </div> --}}

              <p class="lead fw-bold mb-4 pb-2 mt-4" style="color: #f37a27;">Tracking Order</p>

              <div class="row">
                <div class="col-lg-12">
                  @if($adopt->status==='adoption scheduled')
                  <div class="horizontal-timeline">

                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Scheduled</p
                          class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded " style="background-color:;">Processed</p
                          class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded " style="background-color:;">Arrived</p>
                      </li>
                      <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                        <p style="margin-right: -8px;">Done</p>
                      </li>
                    </ul>

                  </div>
                  @elseif($adopt->status==='adoption processed')
                  <div class="horizontal-timeline">

                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Scheduled</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color:#f37a27;">Processed</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded" style="background-color:;">Arrived
                        </p>
                      </li>
                      <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                        <p style="margin-right: -8px;">Done</p>
                      </li>
                    </ul>

                  </div>
                  @elseif($adopt->status==='adoption arrivied')
                  <div class="horizontal-timeline">

                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Scheduled</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color:#f37a27;">Processed</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color:#f37a27;">Arrived
                        </p>
                      </li>
                      <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                        <p style="margin-right: -8px;">Done</p>
                      </li>
                    </ul>

                  </div>

                  @elseif($adopt->status==='adoption done')
                  <div class="horizontal-timeline">

                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">Scheduled</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color:#f37a27;">Processed</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color:#f37a27;">Arrived
                        </p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white" style="background-color:#f37a27;">Done
                        </p>
                      </li>
                    </ul>

                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
                  @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
