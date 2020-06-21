
  <!DOCTYPE html>

  <html>

  <head>

    <title>
       Contact US Form

    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link   href="{{ asset('css/contact.css') }}" rel="stylesheet">




    </Style>

  </head>
<body style="background-image: url({{ asset('css/de.jpg') }}); opacity: 1.1">
<!-- Section: Contact v.1 -->
<section class="my-5">

  <!-- Section heading -->

  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->


  <!-- Grid row -->
  <div class="row">


    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">



      <!-- Form with header -->
      <div class="card">
        <div class="card-body">

          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>
          @if(count($errors) >0 )
          <div class="alert alert-danger">
            <ul>

              @foreach ($errors-> all() as $error )

            <li> {{$error}}</li>

              @endforeach
            </ul>
          </div>
          @endif
          @if(\Session::has('success'))
          <div class=" alert alert-success">
          <p>  {{ \Session::get('success')}}</p>

          </div>

          @endif


          <div class="md-form">
              <form method="POST" action="{{url('contact')}}">
                {{csrf_field()}}
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control" name="Name" placeholder=" Enter Your Full Name">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="form-email" name="Email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder=" Entter Your Email ">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" name = "Subject" class="form-control" placeholder=" Enter Subject Topic">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" name="Message" class="form-control md-textarea" rows="3" placeholder=" Enter Your Message..."></textarea>
            <label for="form-text">Send message</label>
          </div>
          <div class="text-center">
            <button class="btn btn-light-blue">Submit</button>
          </div>
        </form>
        </div>
      </div>

      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Goergea, 94126</p>
          <p class="mb-md-0">United States</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>+ 01 234 567 89</p>
          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating blue accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>info@gmail.com</p>
          <p class="mb-0">Goergea_INK@gmail.com</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
</body>
</html>
