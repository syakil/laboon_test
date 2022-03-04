<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend-assets/fonts/icomoon/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend-assets/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/aos.css')}}">
  <link href="{{asset('frontend-assets/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('frontend-assets/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">




</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="index.html">
              <img src="{{asset('frontend-assets/images/logo.png')}}" alt="Image" class="img-fluid" width="50%">
              <!-- <strong>Water</strong>Boat -->
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">

            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="icon-location-arrow text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">San Francisco</span>
                <span class="caption-text">Mountain View, Fake st., CA</span>
              </div>
            </div>

          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="icon-phone text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">000 209 392 312</span>
                <span class="caption-text">Toll free</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex">
              <div class="icon align-self-start">
                <span class="icon-envelope text-primary"></span>
              </div>
              <div class="text">
                <span class="h4 d-block">info@gmail.com</span>
                <span class="caption-text">Gournadi, 1230 Bariasl</span>
              </div>
            </div>
          </div>

          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>




      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">

          <div class="mx-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li>
                  <a href="{{url('/')}}" class="nav-link text-left">Home</a>
                </li>
                <li class="active">
                  <a href="{{url('/book')}}" class="nav-link text-left">BOOK NOW</a>
                </li>
                @guest
                    <li>
                        <a class="nav-link text-left" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link text-left" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('book.index')}}">Your Order</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>

        </div>
      </div>

    </div>

    </div>


    <!-- END slider -->

    <div class="site-section">
      <div class="container">
            <div class="row">
                <div class="col-md-9"></div>
                <div style="col-md-3">
                    <button type="button" class="btn btn-primary mb-3 mt-3" data-toggle="modal" data-target="#exampleModal">Add Booking</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table" id="table-booking">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kapal</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
      </div>
    </div>

    <div class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="{{asset('frontend-assets/images/logo.png')}}" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Company</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Services</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Industrial</a></li>
                  <li><a href="#">Construction</a></li>
                  <li><a href="#">Remodeling</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Our Partners</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- .site-wrap -->

  <!-- .bootstarp modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM BOOKING KAPAL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-store">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                  <label for="no_tlp">No. Telepon</label>
                  <div class="row">
                      <div class="col-md-2">
                          <input type="text" class="form-control" value="+62" readonly>
                      </div>
                      <div class="col-md-10">
                          <input type="text" class="form-control" id="no_tlp" name="no_tlp" placeholder="Masukan Nomor Telepon (8123459598)">
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama">Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="kapal">Kapal</label>
                    <select class="form-control" id="kapal" name="kapal">
                        <option value="" selected disabled>--Pilih Kapal--</option>
                      @foreach ($kapalAll as $list)
                        <option value="{{$list->id}}">{{$list->nama_kapal}}</option>
                      @endforeach
                    </select>
                </div>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submit">Save changes</button>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .bootstarp modal -->


  <!-- loader -->
    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
          <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
          <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/>
        </svg>
    </div>

  <script src="{{asset('frontend-assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery-ui.js')}}"></script>
  <script src="{{asset('frontend-assets/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend-assets/js/aos.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend-assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('frontend-assets/js/main.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <script>

    $(document).ready(function(){
        table = $('#table-booking').DataTable({
            "serverside" : true,
            "ajax" : {
            "url" : "{{ route('book.data') }}",
            "type" : "GET"
            }
        });
    })

    function deleteItem(id){

        Swal.fire({
            title: 'Do you want to delete this item?',
            showDenyButton: true,
            confirmButtonText: 'Delete',
            denyButtonText: `Don't Delete`,
        }).then((result) => {

            if (result.isConfirmed) {

                url = "{{route('book.destroy')}}"
                $.ajax({
                    url: url,
                    headers: { 'X-CSRF-TOKEN': '{{csrf_token()}}' },
                    type: "post",
                    data: {id:id},
                    dataType: 'json',
                    beforeSend: function () {
                        blockPage();
                    },
                }).done(function (data) {

                    unblockPage();

                    if (data.status == 500) {

                        Swal.fire({
                            title: 'Oops!',
                            text: 'Something Wrong ! '+ data.message,
                            icon: 'error',
                        })

                    }else{

                        Swal.fire({
                            title: 'Selamat!',
                            text: 'Data Berhasil Di Hapus !',
                            icon: 'success',
                        })

                        table.ajax.reload();


                    }

                }).fail(function (data) {

                    Swal.fire({
                        title: 'Oops!',
                        text: 'Something Wrong !',
                        icon: 'error',
                    })

                    unblockPage();
                });

            } else if (result.isDenied) {
                Swal.fire('Item are not deleted', '', 'info')
            }
        })

    }

    function blockPage() {
        $("#loader").addClass('show');
    }

    function unblockPage() {
        $("#loader").removeClass('show');
    }

    $(".submit").on('click',function(){

        nama = $('input[name="nama"]').val();
        tlpon = $('input[name="no_tlp"]').val();
        alamat = $('#alamat').val();
        kapal = $('#kapal').val();


        switch (true) {
            case !nama:
                Swal.fire({
                    title: 'Oops!',
                    text: 'Nama Harus Di Isi !',
                    icon: 'error',
                })
                break;
            case !tlpon:
                Swal.fire({
                    title: 'Oops!',
                    text: 'No Telepon Harus Diisi !',
                    icon: 'error',
                })
                break;
            case isNaN(tlpon):
                Swal.fire({
                    title: 'Oops!',
                    text: 'No Telepon Harus Berupa Angka !',
                    icon: 'error',
                })
                break;
            case tlpon.length <= 9 || tlpon[0] != 8:
                Swal.fire({
                    title: 'Oops!',
                    text: 'No Telepon Tidak Valid !',
                    icon: 'error',
                })
                break;
            case tlpon.length > 11:
                Swal.fire({
                    title: 'Oops!',
                    text: 'No Telepon Tidak Valid !',
                    icon: 'error',
                })
                break;
            case alamat == '':
                Swal.fire({
                    title: 'Oops!',
                    text: 'Alamat Harus Diisi !',
                    icon: 'error',
                })
                break;
            case !kapal:
                Swal.fire({
                    title: 'Oops!',
                    text: 'Kapal Harus Diisi !',
                    icon: 'error',
                })
                break;

            default:
                url = "{{route('book.store')}}"
                $.ajax({
                    url: url,
                    headers: { 'X-CSRF-TOKEN': '{{csrf_token()}}' },
                    type: "post",
                    data: $('.form-store').serialize(),
                    dataType: 'json',
                    beforeSend: function () {
                        blockPage();
                    },
                }).done(function (data) {

                    unblockPage();
                    table.ajax.reload();

                    if (data.status == 500) {

                        Swal.fire({
                            title: 'Oops!',
                            text: 'Something Wrong ! '+ data.message,
                            icon: 'error',
                        })

                    }else{

                        $('#exampleModal').modal('hide');
                        Swal.fire({
                            title: 'Selamat!',
                            text: 'Data Berhasil Dibuat',
                            icon: 'success',
                        })


                    }

                }).fail(function (data) {

                    Swal.fire({
                        title: 'Oops!',
                        text: 'Something Wrong !',
                        icon: 'error',
                    })

                    unblockPage();
                });
                break;
        }



    })


  </script>


</body>

</html>
