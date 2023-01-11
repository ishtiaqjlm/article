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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="accueil3" />
    <div class="container-center-horizontal">
      <div class="accueil3 screen">
        <div class="contenue">
          <img class="image-1" src="{{ asset('public/img/image-1-2@2x.png'); }}" alt="image 1" />
          <form action="{{url('/')}}/password/reset-password" method="POST">
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
               @if(message)
               <li>{{$message}}</li>
               @endif
              </ul>
            <!-- @endif -->
            <input type="hidden" name="token" value="{{$token}}" id="token" class="form-control">
            <div class="form-password">
              <div class="password"><span>Mot de passe</span></div>
              <input type="password" name="password" value="" id="password" class="form-control">
              
            </div>
            <div class="form-password">
              <div class="password"><span>Mot de passe</span></div>
              <input type="password" name="password_confirmation" value="" id="password_confirmation" class="form-control">
              <!-- <div class="frame">
                <div class="password-1 inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">***************</span>
                </div>
              </div> -->
            </div>
            <div class="form-button">
              <div class="name-1 archivo-bold-white-16px">
                <button class="archivo-bold-white-16px" style="color: #5e1557;">Send</button>
              </div>
            </div>
          </div>
          <a href="{{ asset('password/forgot-password'); }}">
           <p class="name-2" style="margin-left: 44%;"><span>S'inscrire</span></p>
          </a>
          @include('../footer')
        </div>
      </div>
    </div>
  </body>
</html>
