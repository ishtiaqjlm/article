
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png') }}" /> -->
    <meta name="viewport" content="width=1922, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mes-recherches-1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body style="margin: 0; background: #ffffff">
    <div id="myModal3" class="modal fade ">
     <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Action Need</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div class="formulaire">
            <div class="form-button" align="center">
              <div class="name-1 archivo-bold-white-16px">
                <div style="color:black;">Are you sure want to delete this Search</div>
                <div class="clearfix">&nbsp;</div>
                <button class="btn btn-danger ysd" id="ysd" style="color: white;">Yes</button>
                <button class="btn btn-light  nsd"  id="nsd" style="color: black;">No</button>
                <br/><br/>
              </div>
            </div>
          </div>
         </div>
        </div>
     </div>
    </div>
    <input type="hidden" id="anPageName" name="page" value="mes-recherches-1" />
    <div class="container-center-horizontal">
      <div class="mes-recherches-1 screen">
        <div class="page">
           <div class="sidebar">
            <div class="flex-col">
              <div class="component-1">
                <img class="rectangle-1170" src="{{ asset('public/img/rectangle-1170-13@2x.png') }}" alt="Rectangle 1170" />
                <div class="overlap-group1">
                  <img class="collapse" src="{{ asset('public/img/collapse-13@2x.png') }}" alt="Collapse" />
                  <p class="x21092022-actualit archivo-medium-thistle-green-20px">
                    <span class="archivo-medium-thistle-green-20px">21/09/2022<br /></span
                    ><span class="archivo-light-thistle-green-10px"><br /></span
                    ><span class="archivo-light-thistle-green-15px">Actualités du 1/09/2022 au 16/09/2022</span>
                  </p>
                </div>
              </div>
              <div class="menu">
                <a href="{{ asset('/accueil') }}">
                <div class="accueil">
                  <img class="x-alt-1" src="{{ asset('public/img/home-alt-1-12@2x.png') }}" alt="home-alt 1" />
                  <div class="accueil-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Accueil</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/categories') }}">
                <div class="overlap-group-3">
                  <img class="apps-1" src="{{ asset('public/img/apps-1-3@2x.png') }}" alt="apps 1" />
                  <div class="catgories-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Catégories</span> </span>
                  </div>
                </div>
                </a>
                <div class="urgent-cab">
                  <img class="sitemap-1-1" src="{{ asset('public/img/sitemap-1-3@2x.png') }}" alt="sitemap 1" />
                  <div class="urgent-cab-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Urgent Cab</span> </span>
                  </div>
                </div>
                <div class="liker">
                  <img class="sitemap-1-2" src="{{ asset('public/img/sitemap-1-4@2x.png') }}" alt="sitemap 1" />
                  <div class="jaime valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">J’aime</span> </span>
                  </div>
                </div>
                <div class="je-lis-plus-tard">
                  <div class="sitemap-1-3">
                    <img class="iconbookshelf" src="{{ asset('public/img/icon-bookshelf-1@2x.png') }}" alt="icon/bookshelf" />
                  </div>
                  <div class="je-lis-plus-tard-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Je lis plus tard</span> </span>
                  </div>
                </div>
                <div class="dj-vu">
                  <img class="sitemap-1" src="{{ asset('public/img/sitemap-1-1@2x.png') }}" alt="sitemap 1" />
                  <div class="jai-dj-lu valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">J&#39;ai déjà lu</span> </span>
                  </div>
                </div>
                <div class="dj-vu-1">
                  <img class="sitemap-1" src="{{ asset('public/img/sitemap-2-4@2x.png') }}" alt="sitemap 1" />
                  <div class="mes-recherches valign-text-middle">
                    <span><span>Mes recherches</span> </span>
                  </div>
                </div>
                <div class="newsletter">
                  <img class="sitemap-1-4" src="{{ asset('public/img/sitemap-1-2@2x.png') }}" alt="sitemap 1" />
                  <div class="gestion-newsletter valign-text-middle archivo-normal-storm-gray-16px">
                    <span><span class="archivo-normal-storm-gray-16px">Gestion Newsletter</span> </span>
                  </div>
                </div>
                <a href="{{ asset('/adminprofile') }}">
                <div class="admin">
                  <img class="x-alt-1" src="{{ asset('public/img/users-alt-1-11@2x.png') }}" alt="users-alt 1" />
                  <div class="profil-administrateur valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Profil Administrateur</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset ('/logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <div class="logout">
                  <img class="line-12" src="{{ asset('public/img/line-12-1@2x.png') }}" alt="Line 12" />
                  <div class="flex-row">
                    <img class="vector" src="{{ asset('public/img/vector-1@2x.png') }}" alt="Vector" />
                    <div class="sortir valign-text-middle roboto-medium-radical-red-16px">
                      <span><span class="roboto-medium-radical-red-16px">Sortir</span> </span>
                    </div>
                  </div>
                </div>
              </a>
              <form id="frm-logout" action="{{ asset('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              </div>
            </div>
            <img class="line-1" src="{{ asset('public/img/line-1-16@2x.png') }}" alt="Line 1" />
          </div>
          <div class="contenue">
            <div class="group-1209">
              @include('header')
              <!-- <div class="frame-1185">
                <div class="catgories-2 roboto-medium-scarlet-gum-24px">
                  <span class="roboto-medium-scarlet-gum-24px">Recherches enregistrées</span>
                </div>
                <div class="notification">
                  <div class="ellipse-94"></div>
                </div>
                <img class="cog-1" src="{{ asset('public/img/cog-1-17@2x.png') }}" alt="cog 1" />
                <img class="profile" src="{{ asset('public/img/profile-1@2x.png') }}" alt="Profile" />
                <div class="mahmud-container">
                  <div class="asfak-mahmud valign-text-middle roboto-medium-nile-blue-16px">
                    <span><span class="roboto-medium-nile-blue-16px">Asfak Mahmud</span> </span>
                  </div>
                  <div class="asfakmahmudbdgmaillcom valign-text-middle roboto-normal-stack-12px">
                    <span><span class="roboto-normal-stack-12px">asfakmahmudbd@gmaill.com</span> </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="section-mes-recherche">
              <div class="mes-recherches-2 roboto-medium-scarlet-gum-24px">
                <span class="roboto-medium-scarlet-gum-24px">Mes recherches</span>
              </div>
              @if ($success_delete = Session::get('success_delete'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $success_delete }}</strong>
              </div>
              @endif
              @if ($error_delete = Session::get('error_delete'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $error_delete }}</strong>
              </div>
              @endif
              <div class="overlap-group1-1">
                <div class="tableau-recherches-enregistres">
                 @if(count($my_research)>0)
                  @foreach($my_research as $data)
                  <div class="recherche-enregistre">
                    <div class="call-to-action">
                      <div class="rechercher valign-text-middle roboto-bold-scarlet-gum-16px">
                        <span><span class="roboto-bold-scarlet-gum-16px">Rechercher</span> </span>
                      </div>
                    </div>
                    <div class="h6 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Recherche initial : {{$data->initial_research}}</span>
                    </div>
                    <div class="frame-1290">
                      <div class="h6-1 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Période : {{$data->search_days->days}} jours</span>
                      </div>
                    </div>
                    <div class="frame-1289">
                      <div class="h6-2 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                      </div>
                      <div class="overlap-group">
                        <div class="rectangle-1171"></div>
                        <div class="catgories valign-text-middle archivo-medium-white-16px">
                          <span>
                            <span class="archivo-medium-white-16px">
                              {{ \Illuminate\Support\Str::limit($data->search_cat->name, 16, $end='..') }}
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1288">
                      <div class="h6-3 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                      </div>
                      <div class="overlap-group-1">
                        <div class="rectangle-1171-1"></div>
                        <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                          <span>
                            <span class="archivo-medium-white-16px">
                              {{ \Illuminate\Support\Str::limit($data->search_subcat->name, 16, $end='..') }}
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1">
                      <div class="group-1294">
                        <div class="h6-4 archivo-semi-bold-black-14px">
                          <span class="archivo-semi-bold-black-14px">Tag :</span>
                        </div>
                        @foreach($data->tags as $tags)
                        <div class="tag-badge-default" style="justify-content: flex-start;padding-left:3px;">
                          <span class="archivo-medium-white-16px">{{$tags->search_tags->name}}</span>
                        </div>
                        @endforeach
                      </div>
                      <img class="akar-iconscross" data-id="search{{$data->id}}" src="{{ asset('public/img/akar-icons-cross-13@2x.png') }}" alt="akar-icons:cross" />
                    </div>
                  </div>
                  @endforeach
                  @else
                  <div class="recherche-enregistre">
                    No Search Found
                  </div>  
                  @endif
                  {{ $my_research->links() }}
                </div>
                <div class="call-to-action-4">
                  <div class="voir-plus valign-text-middle roboto-bold-white-16px">
                    <span><span class="roboto-bold-white-16px">Voir plus</span> </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('footer')
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">

var url_search_del    = "{{asset('/')}}delete_search/";
var sid;  
$(document).on('click','.akar-iconscross',function(e){

    $("#myModal3").modal('show');
    console.log($(this).data('id'));
    var rawid = $(this).data('id');
    var id    = rawid.replace("search","");
        sid   = id;
    //alert(url_search_del+id);
    //document.location=url_search_del+id;
})
$(document).on('click','.ysd,.nsd',function(e){

    console.log($(this).attr('id'));
    var rawid = $(this).attr('id');
    if(rawid == 'ysd'){
     //alert(url_search_del+sid);
     document.location=url_search_del+sid;
    }else{
     $("#myModal3").modal('hide');         
    }
})
</script>
