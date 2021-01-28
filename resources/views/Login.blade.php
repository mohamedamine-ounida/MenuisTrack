
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Charpentier-Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css"') }} rel="stylesheet" type="text/css">
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <!-- Outer Row -->
    <div class=" pt-5 row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-gradient-light ">
                <!--client-->
                <div class="text-center">
                  <h1 class=" pt-5 h4 text-gray-900 mb-4">Client</h1>
                   <h6"pt-5 h4 text-gray-900 mb-4">En fin de suivre votre commande,
                                 entrez le numéro de suivre s'il vous plait :</h6>
                </div>
                <form class="user" action="/client/suivi/" >
                  <div class="form-group pt-3 col-xl-9 ml-md-5">

                    <div class="@if($errors->get('sui'))alert alert-danger @endif" role="alert">
                      @if($errors->get('sui'))
                    @foreach($errors->get('sui') as $message)
                            <li>{{$message}}</li>
                    @endforeach
                    @endif
                  </div>
                    <input type="number" class="form-control form-control-user"  name="sui" value="{{old('sui')}}"  placeholder="Enter code de  commandes...">
                    @csrf
                  </div>
                  <hr>
                  <input type="submit" class=" col-lg-10 btn btn-primary btn-user col-xl-9 ml-md-5"  value="suivre">
                </form>
                <hr>
                <div class="text-center">pour d'autres informations, contacter-nous </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Charpentier</h1>
                    
                    @if(session()->has('flaslogin'))
                  <div class=" alert alert-danger">
                      {{session()->get('flaslogin')}}
                  </div>
                  @endif

                  </div>
                  <form class="user" action="/login" methode="get">
                    <input type="hidden" name="token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user"  name="email" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-user"   name="Password" placeholder="Password">
                    </div>
                    <hr>
                    <input type="submit"  class="btn btn-primary btn-user btn-block" value="Login">
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>