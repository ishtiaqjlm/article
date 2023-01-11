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
          <form action="{{url('/')}}/password/forgot-password" method="POST">
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
            
            <ul >
              @if($status == 'passwords.sent')
              <li style="color:green"> {{$status}}. Please check your email</li>
              @elseif($status == 'wrong')
              <li style="color:red"> Email address did not match</li>
              @endif 
            </ul>
              
            <div class="form-email">
              <div class="label"><span>Email</span></div>
              <input type="text" name="email" value="" id="email" class="form-control">
              <!-- <div class="frame">
                <div class="name inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">azerty@qolumn.fr</span>
                </div>
              </div> -->
            </div>
            <div class="form-button">
              <div class="name-1 archivo-bold-white-16px">
                <button class="archivo-bold-white-16px" style="color: #5e1557;">Send</button>
              </div>
            </div>
          </div>
          <a href="{{ asset('/register'); }}">
           <p class="name-2" style="margin-left: 44%;"><span>S'inscrire</span></p>
          </a>
          @include('../footer')
        </div>
      </div>
    </div>
  </body>
</html>
