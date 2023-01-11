<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta name="viewport" content="width=1922, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/accueil3.css'); }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css'); }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css'); }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    //$("#myModal").modal('show');
  });
</script>
  </head>
  <body style="margin: 0; background: #ffffff">
    <p><input type="hidden" id="anPageName" name="page" value="accueil3" />
    <div class="container-center-horizontal">
      <div class="accueil3 screen">
        <div class="contenue">
          <img class="image-1" src="{{ asset('public/img/image-1-2@2x.png'); }}" alt="image 1" />
          <form action="{{url('/')}}/login" method="POST">
            @csrf
          <div class="formulaire" style="margin-left: 36%;">
             <!--  @if($errors->any())
            <div style="color:red">
              Something went wrong
            </div>   -->
             <ul style="color:red">
              @foreach($errors->all() as $error)
               <li>
                {{ $error }}
               </li>
               @endforeach
               
              </ul>
            <!-- @endif -->
           
            <div class="form-email">
              <div class="label"><span>Email</span></div>
              <input type="text" name="username" value="harry@repzzz.com" id="username" class="form-control">
              <!-- <div class="frame">
                <div class="name inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">azerty@qolumn.fr</span>
                </div>
              </div> -->
            </div>
            <div class="form-password">
              <div class="password"><span>Mot de passe</span></div>
              <input type="password" name="password" value="q1w2e3r4t5" id="password" class="form-control">
              <!-- <div class="frame">
                <div class="password-1 inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">***************</span>
                </div>
              </div> -->
            </div>
            <div class="form-button">
              <div class="name-1 archivo-bold-white-16px">
                <button class="archivo-bold-white-16px" style="color: #5e1557;">Connexion</button>
              </div>
            </div>
          </div>
          <a href="{{ asset('password/forgot-password'); }}">
           <p class="name-2" style="margin-left: 44%;"><span>Mot de passe oublié ?</span></p>
          </a>
          <!-- @include('footer') -->
        </div>
      </div>
    </div>
</p>
</body>
</html>
