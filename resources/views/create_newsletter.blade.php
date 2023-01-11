<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/newsletter-parametre.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  </head>
  <body style="margin: 0">
    <input type="hidden" id="anPageName" name="page" value="newsletter-parametre" />
    <div class="container-center-horizontal">
      <div class="newsletter-parametre screen">
        <div class="cration-dune-newsletter"><span>Création d’une Newsletter</span></div>
        <p class="lorem-ipsum-dolor-si archivo-normal-black-16px">
          <span class="archivo-normal-black-16px"
            >
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus egestas lectus mattis ut morbi maecenas
            proin egestas urna. Fringilla sed sed faucibus pulvinar a hendrerit nisl tortor. Eleifend morbi condimentum
            eu quis amet nunc lacus. Faucibus interdum ullamcorper aliquet aliquet. Enim, senectus ullamcorper turpis
            tincidunt viverra. Sit amet aliquam lobortis velit tortor habitant orci montes, vitae. Facilisis maecenas
            consequat dolor sapien. Et non semper quis tellus amet, nunc in. Sapien auctor quis lacus volutpat.</span
          >
        </p>
        <form action="{{asset('/')}}save_newsletter" method="POST" name="save_newsletter" id="save_newsletter">
         @csrf
        <div class="paramtrage">
          <div class="rechercche-initiale archivo-semi-bold-black-14px">
            <span class="archivo-semi-bold-black-14px">Recherche initiale : {{$search_text}}</span>
            <input type="hidden" name="search_text" id="search_text" value="{{$search_text}}">
            <input type="hidden" name="pagename" id="pagename" value="{{$pagename}}">
            
          </div>
          <div class="catgories">
            <div class="h6 archivo-semi-bold-black-14px">
              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
            </div>
            <div class="overlap-group">
              <div class="rectangle-1171"></div>
              <div class="catgories-1 valign-text-middle archivo-medium-white-16px">
                <span>
                  <span class="archivo-medium-white-16px">
                  @if(isset($category[0]->name))
                   {{$category[0]->name}}
                   <input type="hidden" name="catid" id="catid" value="{{$category[0]->id}}">
                  @else
                   <input type="hidden" name="catid" id="catid" value=""> 
                  @endif 
                  </span>
                </span>
              </div>
            </div>
          </div>
          <div class="sous-catgorie">
            <div class="h6-1 archivo-semi-bold-black-14px">
              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
            </div>
            <div class="overlap-group-1">
              <div class="rectangle-1171-1"></div>
              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                <span>
                  <span class="archivo-medium-white-16px">
                  @if(isset($subcategory[0]->name))
                   {{$subcategory[0]->name}}
                   <input type="hidden" name="subcatid" id="subcatid" value="{{$subcategory[0]->id}}">
                  @else
                   <input type="hidden" name="subcatid" id="subcatid" value="">
                  @endif 
                  </span>
                </span>
              </div>
            </div>
          </div>
          <div class="tag">
            <div class="h6-2 archivo-semi-bold-black-14px"><span class="archivo-semi-bold-black-14px">Tag :</span></div>
            <button class="btn btn-maroon">
                      @if(isset($tags[0]->name))
                       {{$tags[0]->name}}
                      <input type="hidden" name="tagid" id="tagid" value="{{$tags[0]->id}}">
                      @else
                     <input type="hidden" name="tagid" id="tagid" value=""> 
                      @endif
            </button>
         <!--    <div class="tag-badge">
              <div class="contents">
                <div class="text">
                  <div class="badge-texte archivo-medium-white-16px">
                    <span class="archivo-medium-white-16px">
                      @if(isset($tags[0]->name))
                       {{$tags[0]->name}}
                      @endif 
                    </span>
                  </div>
                </div>
                <div class="x-container"></div>
              </div>
            </div> -->
          </div>
          <div class="frquence">
            <div class="frquence-1 archivo-medium-black-14px">
              <span class="archivo-medium-black-14px">Fréquence :</span>
            </div>
            <div class="box">
              <div class="date">
                <img class="calendar52" src="{{ asset('public/img/calendar52-3@2x.png')}}" alt="calendar52" />
                <div class="address valign-text-middle roboto-normal-scarlet-gum-14px">
                  <span>
                    <span class="roboto-normal-scarlet-gum-14px">
                      @if(isset($days[0]->days))
                      {{$days[0]->days}}
                      <input type="hidden" name="dayid" id="dayid" value="{{$days[0]->id}}">
                      @else
                      <input type="hidden" name="dayid" id="dayid" value="">
                      @endif 
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="destinataires">
            <div class="destinataires-moi archivo-medium-black-14px">
              <span class="archivo-medium-black-14px">Destinataires :&nbsp;&nbsp;Moi</span>
            </div>
            <div class="call-to-action">
              <div class="pesquisar valign-text-middle roboto-bold-white-16px">
                <span><span class="roboto-bold-white-16px">+ Ajouter un destinataire</span> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="formulaire">
          <div class="base">
            <p class="complter-le-formula archivo-bold-scarlet-gum-24px">
              <span class="archivo-bold-scarlet-gum-24px">Compléter le formulaire pour créer la Newsletter</span>
            </p>
            <div class="titre">
              <div class="newsletter archivo-normal-black-16px">
                <span class="archivo-normal-black-16px">Newsletter</span>
              </div>
              <div class="overlap-group-2">
                <div class="titre-de-la-newsletter archivo-normal-storm-gray-16px">
                  <span class="archivo-normal-storm-gray-16px">
                    <input type="text" placeholder="Titre de la Newsletter" name="title" id="title" />
                  </span>
                </div>
              </div>
              <div class="place archivo-normal-black-16px"><span class="archivo-normal-black-16px">par</span></div>
              <p class="auteur-de-la-newsletter archivo-normal-storm-gray-16px">
                <span class="archivo-normal-storm-gray-16px">
                          <!-- Auteur -->&nbsp;&nbsp;
                          @if(Session::has('name'))
                           {{ Session::get('name')}} 
                          @endif
                </span>
              </p>
            </div>
          </div>
          <div class="description">
            <div class="label archivo-normal-scarlet-gum-14px">
              <span class="archivo-normal-scarlet-gum-14px">Description</span>
            </div>
            <div class="location">
              <textarea name="description" id="description" cols="110" rows="6"></textarea>
            </div>
          </div>
          <div class="call-to-action-1 save_newsletter" style="cursor:pointer;">
            <div class="crer-une-newsletter valign-text-middle roboto-bold-white-16px">
              <span><span class="roboto-bold-white-16px">Créer une newsletter</span> </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).on('click','.save_newsletter',function(e) {
     console.log('click');
     $("#save_newsletter").submit();
  })
</script>
<style>
  .btn-maroon, .btn-maroon:focus {
    background-color: #981b48 !important;
    border-color: #981b48;
    color: #fff;
}
</style>
