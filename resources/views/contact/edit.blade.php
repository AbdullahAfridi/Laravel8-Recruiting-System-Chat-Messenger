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
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Edit:</h3>
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
              <form method="POST" action="{{ action('ContactController@update',$id) }}">
                {{csrf_field()}}
                <input type="hidden" class="form-control" name= " _method" value="PATCH"/>
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control" name="Name" value="{{$contact->Name}}" placeholder=" Enter Your Full Name">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="form-email" name="Email" value="{{$contact->Email}}" pattern="[^ @]*@[^ @]*" class="form-control" placeholder=" Entter Your Email ">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" name = "Subject" value="{{$contact->Subject}}" class="form-control" placeholder=" Enter Subject Topic">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" name="Message" value="{{$contact->Message}}" class="form-control md-textarea" rows="3" placeholder=" Enter Your Message..."></textarea>
            <label for="form-text">Send message</label>
          </div>
          <div class="text-center">
            <input type="submit" class="btn btn-primary" value = Edit/>
          </div>
        </form>
        </div>
      </div>
