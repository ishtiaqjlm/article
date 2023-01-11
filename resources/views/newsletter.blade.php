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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/newsletter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="newsletter" />
    <div class="container-center-horizontal">
      <div class="newsletter screen">
        <div class="page">
          @include('sidebar')
           <!-- <div class="sidebar">
            <div class="flex-col">
              <div class="component-1">
                <img class="rectangle-1170" src="{{ asset('public/img/rectangle-1170-13@2x.png') }}" alt="Rectangle 1170" />
                <div class="overlap-group1-1">
                  <img class="collapse" src="{{ asset('public/img/collapse-13@2x.png') }}" alt="Collapse" />
                  <p class="x21092022-actualit archivo-medium-thistle-green-20px">
                    <span class="archivo-medium-thistle-green-20px">21/09/2022<br /></span
                    ><span class="archivo-light-thistle-green-10px"><br /></span
                    ><span class="archivo-light-thistle-green-15px">Actualités du 1/09/2022 au 16/09/2022</span>
                  </p>
                </div>
              </div>
              <div class="menu">
                <a href="{{ asset('/') }}">
                <div class="accueil">
                  <img class="x-alt-1" src="{{ asset('public/img/home-alt-1-12@2x.png') }}" alt="home-alt 1" />
                  <div class="accueil-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Accueil</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/categories') }}">
                <div class="overlap-group-5">
                  <img class="apps-1" src="{{ asset('public/img/apps-1-3@2x.png') }}" alt="apps 1" />
                  <div class="catgories-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Catégories</span> </span>
                  </div>
                </div>
                </a>
               <a href="{{ asset('/urgents') }}">
                <div class="urgent-cab">
                  <img class="sitemap-1-1" src="{{ asset('public/img/sitemap-1-3@2x.png') }}" alt="sitemap 1" />
                  <div class="urgent-cab-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Urgent Cab</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/jaime') }}">
                <div class="liker">
                  <img class="sitemap-1-2" src="{{ asset('public/img/sitemap-1-4@2x.png') }}" alt="sitemap 1" />
                  <div class="jaime valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">J’aime</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/je_lis_plus_tard') }}">
                <div class="je-lis-plus-tard">
                  <div class="sitemap-1-3">
                    <img class="iconbookshelf" src="{{ asset('public/img/icon-bookshelf-1@2x.png') }}" alt="icon/bookshelf" />
                  </div>
                  <div class="je-lis-plus-tard-1 valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Je lis plus tard</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/j_ai_deja_lu') }}">
                <div class="dj-vu">
                  <img class="sitemap-1" src="{{ asset('public/img/sitemap-1-1@2x.png') }}" alt="sitemap 1" />
                  <div class="jai-dj-lu valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">J&#39;ai déjà lu</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/mes-recherches') }}">
                <div class="dj-vu">
                  <img class="sitemap-1" src="{{ asset('public/img/sitemap-2-4@2x.png') }}" alt="sitemap 1" />
                  <div class="mes-recherches valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Mes recherches</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/newsletter') }}">
                <div class="newsletter-3">
                  <img class="sitemap-1-4" src="{{ asset('public/img/sitemap-1-14@2x.png') }}" alt="sitemap 1" />
                  <div class="gestion-newsletter valign-text-middle archivo-bold-scarlet-gum-16px">
                    <span><span class="archivo-bold-scarlet-gum-16px">Gestion Newsletter</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/adminprofile') }}">
                <div class="admin">
                  <img class="x-alt-1" src="{{ asset('public/img/users-alt-1-11@2x.png') }}" alt="users-alt 1" />
                  <div class="profil-administrateur valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Profil Administrateur</span> </span>
                  </div>
                </div>
              </a>
                <div class="logout">
                  <img class="line-12" src="{{ asset('public/img/line-12-1@2x.png') }}" alt="Line 12" />
                  <div class="flex-row-1">
                    <img class="vector" src="{{ asset('public/img/vector-1@2x.png') }}" alt="Vector" />
                    <div class="sortir valign-text-middle roboto-medium-radical-red-16px">
                      <span><span class="roboto-medium-radical-red-16px">Sortir</span> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <img class="line-1" src="{{ asset('public/img/line-1-16@2x.png') }}" alt="Line 1" />
          </div> --> 
          <div class="contenue">
            @include('header')
            <!-- <div class="group-1209">
              <div class="overlap-group9">
                <div class="add-button"></div>
                <div class="frame-1185">
                  <div class="catgories-2 roboto-medium-scarlet-gum-24px">
                    <span class="roboto-medium-scarlet-gum-24px">Gestion Newsletter</span>
                  </div>
                  <div class="notification">
                    <div class="ellipse-94"></div>
                  </div>
                  <img class="cog-1" src="{{ asset('public/img/cog-1-17@2x.png') }}" alt="cog 1" />
                  <img class="profile" src="{{ asset('public/img/profile-1@2x.png') }}" alt="Profile" />
                  <div class="mahmud-container">
                    <div class="asfak-mahmud valign-text-middle roboto-medium-nile-blue-16px">
                      <span>
                        <span class="roboto-medium-nile-blue-16px">
                         @if(Session::has('name'))
                           {{ Session::get('name')}} 
                          @endif
                        </span>
                      </span>
                    </div>
                    <div class="asfakmahmudbdgmaillcom valign-text-middle roboto-normal-stack-12px">
                      <span>
                        <span class="roboto-normal-stack-12px">
                          @if(Session::has('email'))
                         {{ Session::get('email')}}
                         @endif
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="overlap-group8">
              <div class="programmer-un-newsletter">
                <div class="programmer-une-newsletter roboto-medium-scarlet-gum-24px">
                  <span class="roboto-medium-scarlet-gum-24px">Programmer une newsletter</span>
                </div>
                <p class="lorem-ipsum-dolor-si">
                  <span
                    >Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit ametLorem ipsum dolor
                    sit amet, consectetur adipiscing elit ut aliquam, purus sit ametLorem ipsum dolor sit amet,
                    consectetur adipiscing elit ut aliquam, purus sit ametLorem ipsum dolor sit amet, consectetur
                    adipiscing elit ut aliquam, purus sit ametLorem ipsum dolor sit amet, consectetur adipiscing elit ut
                    aliquam, purus sit ametLorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit
                    ametLorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit ametLorem ipsum
                    dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit ametLorem ipsum dolor sit amet,
                    consectetur adipiscing elit ut aliquam, purus sit amet</span
                  >
                </p>
              </div>
              <div class="section-recherche">
                <div class="recherche-section">
                  <div class="barre-de-recherche">
                    <img class="bxsearch-alt" src="{{ asset('public/img/bx-search-alt-7@2x.png') }}" alt="bx:search-alt" />
                    <div class="mot-cls"></div>
                  </div>
                  <div class="filtre">
                    <div class="filtre-item">
                      <div class="catgorie valign-text-middle roboto-normal-mountain-mist-14px">
                        <span><span class="roboto-normal-mountain-mist-14px">Catégorie</span> </span>
                      </div>
                    </div>
                    <div class="filtre-item">
                      <div class="catgorie valign-text-middle roboto-normal-mountain-mist-14px">
                        <span><span class="roboto-normal-mountain-mist-14px">Sous-catégorie</span> </span>
                      </div>
                    </div>
                    <div class="box">
                      <div class="date"><!-- url changed -->
                        <img class="calendar52" src="{{ asset('public/img/calendar52-11@2x.png') }}" alt="calendar52" />
                        <div class="priode valign-text-middle roboto-normal-mountain-mist-14px">
                          <span><span class="roboto-normal-mountain-mist-14px">Période</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="box-1">
                      <div class="badge-tag valign-text-middle roboto-normal-mountain-mist-14px">
                        <span><span class="roboto-normal-mountain-mist-14px">Badge tag</span> </span>
                      </div>
                    </div>
                    <div class="call-to-action-2">
                      <div class="pesquisar-2 valign-text-middle roboto-bold-white-16px">
                        <span><span class="roboto-bold-white-16px">Recherche</span> </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mes-newsletter">
              <div class="mes-newsletters roboto-medium-scarlet-gum-24px">
                <span class="roboto-medium-scarlet-gum-24px">Mes Newsletters</span>
              </div><!-- 
                @foreach ($articles as $data)
                 
                   <h2>{{ $loop->index+4 }}</h2>     
                   <h2>{{ $data->title }}</h2>
                   <h2>{{ $data->description }}</h2>
                   <h2>{{ $data->initial_research }}</h2> 
                   <h1>{{$data->username}}</h1>
                   <h2>{{ $data->categoryname }}</h2>
                   <h2>{{ $data->subcategoryname }}</h2>
                   <h2>{{ $data->tagname }}</h2>
                   <h2>{{ $data->days }}</h2>
                   
                   
                 @endforeach
                -->
                
              <div class="group-1207">
                @foreach ($articles as $data)
                <div class="newsletter-4" style="margin-left: 30px;">
                  <div class="list-title">
                    <div class="h5 montserrat-bold-black-pearl-16px">
                      <span class="montserrat-bold-black-pearl-16px">{{ $data->title }}</span>
                    </div>
                  </div>
                  <div class="sublink">
                    <div class="h6 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Recherche initiale : {{ $data->initial_research }}</span>
                    </div>
                    <div class="h6-1 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Fréquence : {{ $data->days }} jours</span>
                    </div>
                    <div class="frame-1289">
                      <div class="h6-2 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                      </div>
                      <div class="overlap-group">
                        <div class="rectangle-1171"></div>
                        <div class="catgories valign-text-middle archivo-medium-white-16px">
                          <span><span class="archivo-medium-white-16px"> {{ $data->categoryname }}</span> </span>
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
                          <span><span class="archivo-medium-white-16px">{{ $data->subcategoryname }}</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1290">
                      <div class="tag archivo-medium-black-16px">
                        <span class="archivo-medium-black-16px">Tag :</span>
                      </div>
                      <div class="frame-1154">
                        <div class="overlap-group-2">
                          <div class="rectangle-1171-2"></div>
                          <div class="tag-badge-default">
                            <div class="contents">
                              <div class="text">
                                <div class="badge-texte archivo-medium-white-16px">
                                  <span class="archivo-medium-white-16px">{{ $data->tagname }}</span>
                                </div>
                              </div>
                              <div class="x-container"></div>
                            </div>
                          </div>
                        </div>
                        <div class="tag-badge-default-1">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $data->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-129">
                      <div class="overlap-group-2">
                        <div class="rectangle-1171-2"></div>
                        <div class="tag-badge-default">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $data->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tag-badge-default-1">
                        <div class="contents">
                          <div class="text">
                            <div class="badge-texte archivo-medium-white-16px">
                              <span class="archivo-medium-white-16px">{{ $data->tagname }}</span>
                            </div>
                          </div>
                          <div class="x-container"></div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-129">
                      <div class="overlap-group-2">
                        <div class="rectangle-1171-2"></div>
                        <div class="tag-badge-default">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $data->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tag-badge-default-1">
                        <div class="contents">
                          <div class="text">
                            <div class="badge-texte archivo-medium-white-16px">
                              <span class="archivo-medium-white-16px">{{ $data->tagname }}</span>
                            </div>
                          </div>
                          <div class="x-container"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-1294">
                    <img class="bxuser-pin" src="{{ asset('public/img/bx-user-pin-3@2x.png') }}" alt="bx:user-pin" />
                    <p class="h6-4 archivo-semi-bold-mist-gray-14px">
                      <span class="archivo-semi-bold-mist-gray-14px">Partagé avec des utilisateurs exterieurs</span>
                    </p>
                  </div>
                  <div class="frame-1294-1">
                    @if(Session::has('role'))
                      @if(Session::get('role')==1)
                    <div class="call-to-action">
                      <div class="pesquisar valign-text-middle roboto-bold-scarlet-gum-16px">
                         <span><span class="roboto-bold-scarlet-gum-16px">Modifier</span></span>
                      </div>
                    </div>
                    <div class="call-to-action-1">
                      <div class="pesquisar-1 valign-text-middle roboto-bold-scarlet-gum-16px">
                         <span><span class="roboto-bold-scarlet-gum-16px">Supprimer</span> </span>
                      </div>
                    </div>
                    @endif
                  @endif
                  </div>
                </div>
               @endforeach 
            <!--     <div class="newsletter-5">
                  <div class="list-title">
                    <div class="h5-1 montserrat-bold-black-pearl-16px">
                      <span class="montserrat-bold-black-pearl-16px">{{ $articles[1]->title }}</span>
                    </div>
                  </div>
                  <div class="sublink">
                    <div class="h6-5 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Recherche initiale : {{ $articles[1]->initial_research }}</span>
                    </div>
                    <div class="h6-6 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Fréquence : {{ $articles[1]->days }} jours</span>
                    </div>
                    <div class="frame-1289">
                      <div class="h6-7 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                      </div>
                      <div class="overlap-group">
                        <div class="rectangle-1171"></div>
                        <div class="catgories valign-text-middle archivo-medium-white-16px">
                          <span><span class="archivo-medium-white-16px">{{ $articles[1]->categoryname }}</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1288">
                      <div class="h6-8 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                      </div>
                      <div class="overlap-group-1">
                        <div class="rectangle-1171-1"></div>
                        <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                          <span><span class="archivo-medium-white-16px">{{ $articles[0]->subcategoryname }}</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1290">
                      <div class="tag-1 archivo-medium-black-16px">
                        <span class="archivo-medium-black-16px">Tag :</span>
                      </div>
                      <div class="frame-1154">
                        <div class="overlap-group-2">
                          <div class="rectangle-1171-2"></div>
                          <div class="tag-badge-default">
                            <div class="contents">
                              <div class="text">
                                <div class="badge-texte archivo-medium-white-16px">
                                  <span class="archivo-medium-white-16px">{{ $articles[1]->tagname }}</span>
                                </div>
                              </div>
                              <div class="x-container"></div>
                            </div>
                          </div>
                        </div>
                        <div class="tag-badge-default-1">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[1]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-129">
                      <div class="overlap-group-2">
                        <div class="rectangle-1171-2"></div>
                        <div class="tag-badge-default">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[1]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tag-badge-default-1">
                        <div class="contents">
                          <div class="text">
                            <div class="badge-texte archivo-medium-white-16px">
                              <span class="archivo-medium-white-16px">{{ $articles[1]->tagname }}</span>
                            </div>
                          </div>
                          <div class="x-container"></div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1293">
                      <div class="overlap-group-2">
                        <div class="rectangle-1171-2"></div>
                        <div class="tag-badge-default">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[1]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-1294">
                    <img class="bxuser-pin" src="{{ asset('public/img/bx-user-pin-3@2x.png') }}" alt="bx:user-pin" />
                    <p class="h6-9 archivo-semi-bold-mist-gray-14px">
                      <span class="archivo-semi-bold-mist-gray-14px">Partagé avec des utilisateurs exterieurs</span>
                    </p>
                  </div>
                  <div class="frame-1294-1">
                    <div class="call-to-action">
                      <div class="pesquisar valign-text-middle roboto-bold-scarlet-gum-16px">
                        @if(Session::has('role'))
                         @if(Session::get('role')==1)
                         <span><span class="roboto-bold-scarlet-gum-16px">Modifier</span> </span>
                         @endif
                        @endif 
                      </div>
                    </div>
                    <div class="call-to-action-1">
                      <div class="pesquisar-1 valign-text-middle roboto-bold-scarlet-gum-16px">
                        @if(Session::has('role'))
                         @if(Session::get('role')==1)
                         <span><span class="roboto-bold-scarlet-gum-16px">Supprimer</span> </span>
                         @endif
                        @endif  
                      </div>
                    </div>
                  </div>
                </div>
                <div class="newsletter-6">
                  <div class="menu-widget">
                    <div class="list-title">
                      <div class="h5-2 montserrat-bold-black-pearl-16px">
                        <span class="montserrat-bold-black-pearl-16px">{{ $articles[2]->title }}</span>
                      </div>
                    </div>
                    <div class="sublink-2">
                      <div class="h6-10 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Recherche initiale : {{ $articles[2]->initial_research }}</span>
                      </div>
                      <div class="h6-11 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Fréquence : {{ $articles[2]->days }} jours</span>
                      </div>
                      <div class="frame-1289">
                        <div class="h6-12 archivo-semi-bold-black-14px">
                          <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                        </div>
                        <div class="overlap-group">
                          <div class="rectangle-1171"></div>
                          <div class="catgories valign-text-middle archivo-medium-white-16px">
                            <span><span class="archivo-medium-white-16px">{{ $articles[2]->categoryname }}</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="frame-1288">
                        <div class="h6-13 archivo-semi-bold-black-14px">
                          <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                        </div>
                        <div class="overlap-group-1">
                          <div class="rectangle-1171-1"></div>
                          <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                            <span><span class="archivo-medium-white-16px">{{ $articles[2]->subcategoryname }}</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="frame-1290">
                        <div class="tag-2 archivo-medium-black-16px">
                          <span class="archivo-medium-black-16px">Tag :</span>
                        </div>
                        <div class="frame-1154">
                          <div class="overlap-group-2">
                            <div class="rectangle-1171-2"></div>
                            <div class="tag-badge-default">
                              <div class="contents">
                                <div class="text">
                                  <div class="badge-texte archivo-medium-white-16px">
                                    <span class="archivo-medium-white-16px">{{ $articles[2]->tagname }}</span>
                                  </div>
                                </div>
                                <div class="x-container"></div>
                              </div>
                            </div>
                          </div>
                          <div class="tag-badge-default-1">
                            <div class="contents">
                              <div class="text">
                                <div class="badge-texte archivo-medium-white-16px">
                                  <span class="archivo-medium-white-16px">{{ $articles[2]->tagname }}</span>
                                </div>
                              </div>
                              <div class="x-container"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="frame-129">
                        <div class="overlap-group-2">
                          <div class="rectangle-1171-2"></div>
                          <div class="tag-badge-default">
                            <div class="contents">
                              <div class="text">
                                <div class="badge-texte archivo-medium-white-16px">
                                  <span class="archivo-medium-white-16px">{{ $articles[2]->tagname }}</span>
                                </div>
                              </div>
                              <div class="x-container"></div>
                            </div>
                          </div>
                        </div>
                        <div class="tag-badge-default-1">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[2]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1294-2">
                      <img class="bxuser-pin" src="{{ asset('public/img/bx-user-pin-3@2x.png') }}" alt="bx:user-pin" />
                      <p class="h6-14 archivo-semi-bold-mist-gray-14px">
                        <span class="archivo-semi-bold-mist-gray-14px">Partagé avec des utilisateurs exterieurs</span>
                      </p>
                    </div>
                    <div class="frame-1294-3">
                      <div class="call-to-action">
                        <div class="pesquisar valign-text-middle roboto-bold-scarlet-gum-16px">
                          @if(Session::has('role'))
                           @if(Session::get('role')==1)
                           <span><span class="roboto-bold-scarlet-gum-16px">Modifier</span> </span>
                          @endif
                         @endif 
                        </div>
                      </div>
                      <div class="call-to-action-1">
                        <div class="pesquisar-1 valign-text-middle roboto-bold-scarlet-gum-16px">
                         @if(Session::has('role'))
                          @if(Session::get('role')==1) 
                          <span><span class="roboto-bold-scarlet-gum-16px">Supprimer</span> </span>
                          @endif
                         @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="newsletter-7">
                  <div class="list-title-1">
                    <div class="h5-3 montserrat-bold-black-pearl-16px">
                      <span class="montserrat-bold-black-pearl-16px">{{ $articles[3]->title }}</span>
                    </div>
                  </div>
                  <div class="sublink-3">
                    <div class="h6-15 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Recherche initiale : {{ $articles[3]->initial_research }}</span>
                    </div>
                    <div class="h6-16 archivo-semi-bold-black-14px">
                      <span class="archivo-semi-bold-black-14px">Fréquence : {{ $articles[3]->days }} jours</span>
                    </div>
                    <div class="frame-1289">
                      <div class="h6-17 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                      </div>
                      <div class="overlap-group">
                        <div class="rectangle-1171"></div>
                        <div class="catgories valign-text-middle archivo-medium-white-16px">
                          <span><span class="archivo-medium-white-16px">{{ $articles[3]->categoryname }}</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1288">
                      <div class="h6-18 archivo-semi-bold-black-14px">
                        <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                      </div>
                      <div class="overlap-group-1">
                        <div class="rectangle-1171-1"></div>
                        <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                          <span><span class="archivo-medium-white-16px">{{ $articles[3]->subcategoryname }}</span> </span>
                        </div>
                      </div>
                    </div>
                    <div class="frame-1290">
                      <div class="tag-3 archivo-medium-black-16px">
                        <span class="archivo-medium-black-16px">Tag :</span>
                      </div>
                      <div class="frame-1154">
                        <div class="overlap-group-2">
                          <div class="rectangle-1171-2"></div>
                          <div class="tag-badge-default">
                            <div class="contents">
                              <div class="text">
                                <div class="badge-texte archivo-medium-white-16px">
                                  <span class="archivo-medium-white-16px">{{ $articles[3]->tagname }}</span>
                                </div>
                              </div>
                              <div class="x-container"></div>
                            </div>
                          </div>
                        </div>
                        <div class="tag-badge-default-1">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[3]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-1294-2">
                    <img class="bxuser-pin" src="{{ asset('public/img/bx-user-pin-3@2x.png') }}" alt="bx:user-pin" />
                    <p class="h6-19 archivo-semi-bold-mist-gray-14px">
                      <span class="archivo-semi-bold-mist-gray-14px">Partagé avec des utilisateurs exterieurs</span>
                    </p>
                  </div>
                  <div class="frame-1294-4">
                    <div class="call-to-action">
                      <div class="pesquisar valign-text-middle roboto-bold-scarlet-gum-16px">
                        @if(Session::has('role'))
                         @if(Session::get('role')==1)
                          <span><span class="roboto-bold-scarlet-gum-16px">Modifier</span> </span>
                         @endif
                        @endif  
                      </div>
                    </div>
                    <div class="call-to-action-1">
                      <div class="pesquisar-1 valign-text-middle roboto-bold-scarlet-gum-16px">
                       @if(Session::has('role'))
                        @if(Session::get('role')==1) 
                         <span><span class="roboto-bold-scarlet-gum-16px">Supprimer</span> </span>
                        @endif
                       @endif  
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="autres-newsletter">
              <div class="autres-newsletters roboto-medium-scarlet-gum-24px">
                <span class="roboto-medium-scarlet-gum-24px">Autres newsletters</span>
              </div>
              <div class="newsletter-dj-suivie">
                <div class="newsletters-dj-suivies roboto-normal-scarlet-gum-20px">
                  <span class="roboto-normal-scarlet-gum-20px"> Newsletters déjà suivies</span>
                </div>
                <div class="cartes-newsletter">
                  <div class="newsletter-container">
                    <div class="newsletter-1">
                      <div class="flex-row">
                        <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                        <div class="overlap-group1">
                          <div class="avatars-group-3-horizontal">
                            <div class="avatar-container">
                              <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                              <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                              <img class="avatar-3" src="{{ asset('public/img/avatar-3-9@2x.png') }}" alt="Avatar 3" />
                            </div>
                          </div>
                          <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                            <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                          </div>
                        </div>
                        <div class="frame-1197">
                          <div class="ne-plus-suivre valign-text-middle archivo-medium-hot-toddy-12px">
                            <span><span class="archivo-medium-hot-toddy-12px">Ne plus suivre</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="overlap-group-3">
                        <div class="badge"></div>
                        <div class="sublink-1">
                          <div class="h6-20 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                          </div>
                          <div class="h6-21 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Fréquence : 3 jours</span>
                          </div>
                          <div class="frame-1289-1">
                            <div class="h6-22 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                            </div>
                            <div class="overlap-group">
                              <div class="rectangle-1171"></div>
                              <div class="catgories valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1288-1">
                            <div class="h6-23 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                            </div>
                            <div class="overlap-group-4">
                              <div class="rectangle-1171-3"></div>
                              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1290-1">
                            <div class="tag-4 archivo-medium-black-16px">
                              <span class="archivo-medium-black-16px">Tag :</span>
                            </div>
                            <div class="frame-1154-1">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1154-2">
                            <div class="overlap-group-2">
                              <div class="rectangle-1171-2"></div>
                              <div class="tag-badge-default">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                            <div class="tag-badge-default-1">
                              <div class="contents">
                                <div class="text">
                                  <div class="badge-texte archivo-medium-white-16px">
                                    <span class="archivo-medium-white-16px">Badge texte</span>
                                  </div>
                                </div>
                                <div class="x-container"></div>
                              </div>
                            </div>
                            <div class="tag-badge-default-1">
                              <div class="contents">
                                <div class="text">
                                  <div class="badge-texte archivo-medium-white-16px">
                                    <span class="archivo-medium-white-16px">Badge texte</span>
                                  </div>
                                </div>
                                <div class="x-container"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="newsletter-1">
                      <div class="flex-row">
                        <img class="avatar-4" src="{{ asset('public/img/avatar-4-12@2x.png') }}" alt="Avatar 4" />
                        <div class="overlap-group1">
                          <div class="avatars-group-3-horizontal">
                            <div class="avatar-container">
                              <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                              <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                              <img class="avatar-3" src="{{ asset('public/img/avatar-3-4@2x.png') }}" alt="Avatar 3" />
                            </div>
                          </div>
                          <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                            <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                          </div>
                        </div>
                        <div class="frame-1197">
                          <div class="ne-plus-suivre valign-text-middle archivo-medium-hot-toddy-12px">
                            <span><span class="archivo-medium-hot-toddy-12px">Ne plus suivre</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="overlap-group-3">
                        <div class="badge"></div>
                        <div class="sublink-1">
                          <div class="h6-24 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                          </div>
                          <div class="h6-25 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Fréquence : 3 jours</span>
                          </div>
                          <div class="frame-1289-1">
                            <div class="h6-26 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                            </div>
                            <div class="overlap-group">
                              <div class="rectangle-1171"></div>
                              <div class="catgories valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1288-1">
                            <div class="h6-27 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                            </div>
                            <div class="overlap-group-4">
                              <div class="rectangle-1171-3"></div>
                              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1290-1">
                            <div class="tag-5 archivo-medium-black-16px">
                              <span class="archivo-medium-black-16px">Tag :</span>
                            </div>
                            <div class="frame-1154-1">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1154-2">
                            <div class="overlap-group-2">
                              <div class="rectangle-1171-2"></div>
                              <div class="tag-badge-default">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                            <div class="tag-badge-default-1">
                              <div class="contents">
                                <div class="text">
                                  <div class="badge-texte archivo-medium-white-16px">
                                    <span class="archivo-medium-white-16px">Badge texte</span>
                                  </div>
                                </div>
                                <div class="x-container"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="newsletter-container">
                    <div class="newsletter-1">
                      <div class="flex-row">
                        <img class="avatar-4" src="{{ asset('public/img/avatar-4-9@2x.png') }}" alt="Avatar 4" />
                        <div class="overlap-group1">
                          <div class="avatars-group-3-horizontal">
                            <div class="avatar-container">
                              <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                              <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                              <img class="avatar-3" src="{{ asset('public/img/avatar-3-5@2x.png') }}" alt="Avatar 3" />
                            </div>
                          </div>
                          <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                            <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                          </div>
                        </div>
                        <div class="frame-1197">
                          <div class="ne-plus-suivre valign-text-middle archivo-medium-hot-toddy-12px">
                            <span><span class="archivo-medium-hot-toddy-12px">Ne plus suivre</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="overlap-group-3">
                        <div class="badge"></div>
                        <div class="sublink-1">
                          <div class="h6-28 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                          </div>
                          <div class="h6-29 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Fréquence : 7 jours</span>
                          </div>
                          <div class="frame-1289-1">
                            <div class="h6-30 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                            </div>
                            <div class="overlap-group">
                              <div class="rectangle-1171"></div>
                              <div class="catgories valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1288-1">
                            <div class="h6-31 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                            </div>
                            <div class="overlap-group-4">
                              <div class="rectangle-1171-3"></div>
                              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1290-1">
                            <div class="tag-6 archivo-medium-black-16px">
                              <span class="archivo-medium-black-16px">Tag :</span>
                            </div>
                            <div class="frame-1154-1">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1154-2">
                            <div class="overlap-group-2">
                              <div class="rectangle-1171-2"></div>
                              <div class="tag-badge-default">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                            <div class="tag-badge-default-1">
                              <div class="contents">
                                <div class="text">
                                  <div class="badge-texte archivo-medium-white-16px">
                                    <span class="archivo-medium-white-16px">Badge texte</span>
                                  </div>
                                </div>
                                <div class="x-container"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="newsletter-1">
                      <div class="flex-row">
                        <img class="avatar-4" src="{{ asset('public/img/avatar-4-11@2x.png') }}" alt="Avatar 4" />
                        <div class="overlap-group1">
                          <div class="avatars-group-3-horizontal">
                            <div class="avatar-container">
                              <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                              <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                              <img class="avatar-3" src="{{ asset('public/img/avatar-3-11@2x.png') }}" alt="Avatar 3" />
                            </div>
                          </div>
                          <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                            <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                          </div>
                        </div>
                        <div class="frame-1197">
                          <div class="ne-plus-suivre valign-text-middle archivo-medium-hot-toddy-12px">
                            <span><span class="archivo-medium-hot-toddy-12px">Ne plus suivre</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="overlap-group-3">
                        <div class="badge"></div>
                        <div class="sublink-1">
                          <div class="h6-32 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                          </div>
                          <div class="h6-33 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Fréquence : 3 jours</span>
                          </div>
                          <div class="frame-1289-1">
                            <div class="h6-34 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                            </div>
                            <div class="overlap-group">
                              <div class="rectangle-1171"></div>
                              <div class="catgories valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1288-1">
                            <div class="h6-35 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                            </div>
                            <div class="overlap-group-4">
                              <div class="rectangle-1171-3"></div>
                              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1290-1">
                            <div class="tag-7 archivo-medium-black-16px">
                              <span class="archivo-medium-black-16px">Tag :</span>
                            </div>
                            <div class="frame-1154-1">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1154-2">
                            <div class="overlap-group-2">
                              <div class="rectangle-1171-2"></div>
                              <div class="tag-badge-default">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                            <div class="tag-badge-default-1">
                              <div class="contents">
                                <div class="text">
                                  <div class="badge-texte archivo-medium-white-16px">
                                    <span class="archivo-medium-white-16px">Badge texte</span>
                                  </div>
                                </div>
                                <div class="x-container"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="newsletter-container">
                    <div class="newsletter-1">
                      <div class="flex-row">
                        <img class="avatar-4" src="{{ asset('public/img/avatar-4-9@2x.png') }}" alt="Avatar 4" />
                        <div class="overlap-group1">
                          <div class="avatars-group-3-horizontal">
                            <div class="avatar-container">
                              <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                              <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                              <img class="avatar-3" src="{{ asset('public/img/avatar-3-9@2x.png') }}" alt="Avatar 3" />
                            </div>
                          </div>
                          <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                            <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                          </div>
                        </div>
                        <div class="frame-1197">
                          <div class="ne-plus-suivre valign-text-middle archivo-medium-hot-toddy-12px">
                            <span><span class="archivo-medium-hot-toddy-12px">Ne plus suivre</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="overlap-group-3">
                        <div class="badge"></div>
                        <div class="sublink-1">
                          <div class="h6-36 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                          </div>
                          <div class="h6-37 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Fréquence : 3 jours</span>
                          </div>
                          <div class="frame-1289-1">
                            <div class="h6-38 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                            </div>
                            <div class="overlap-group">
                              <div class="rectangle-1171"></div>
                              <div class="catgories valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1288-1">
                            <div class="h6-39 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                            </div>
                            <div class="overlap-group-4">
                              <div class="rectangle-1171-3"></div>
                              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1290-1">
                            <div class="tag-8 archivo-medium-black-16px">
                              <span class="archivo-medium-black-16px">Tag :</span>
                            </div>
                            <div class="frame-1154-1">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1154-3">
                            <div class="overlap-group-2">
                              <div class="rectangle-1171-2"></div>
                              <div class="tag-badge-default">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="newsletter-1">
                      <div class="flex-row">
                        <img class="avatar-4" src="{{ asset('public/img/avatar-4-9@2x.png') }}" alt="Avatar 4" />
                        <div class="overlap-group1">
                          <div class="avatars-group-3-horizontal">
                            <div class="avatar-container">
                              <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                              <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                              <img class="avatar-3" src="{{ asset('public/img/avatar-3-4@2x.png') }}" alt="Avatar 3" />
                            </div>
                          </div>
                          <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                            <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                          </div>
                        </div>
                        <div class="frame-1197">
                          <div class="ne-plus-suivre valign-text-middle archivo-medium-hot-toddy-12px">
                            <span><span class="archivo-medium-hot-toddy-12px">Ne plus suivre</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="overlap-group-3">
                        <div class="badge"></div>
                        <div class="sublink-1">
                          <div class="h6-40 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                          </div>
                          <div class="h6-41 archivo-semi-bold-black-14px">
                            <span class="archivo-semi-bold-black-14px">Fréquence : 3 jours</span>
                          </div>
                          <div class="frame-1289-1">
                            <div class="h6-42 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                            </div>
                            <div class="overlap-group">
                              <div class="rectangle-1171"></div>
                              <div class="catgories valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1288-1">
                            <div class="h6-43 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                            </div>
                            <div class="overlap-group-4">
                              <div class="rectangle-1171-3"></div>
                              <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                              </div>
                            </div>
                          </div>
                          <div class="frame-1290-1">
                            <div class="tag-9 archivo-medium-black-16px">
                              <span class="archivo-medium-black-16px">Tag :</span>
                            </div>
                            <div class="frame-1154-1">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="newsletter-suivre">
                <div class="newsletters-suivre roboto-normal-scarlet-gum-20px">
                  <span class="roboto-normal-scarlet-gum-20px">Newsletters à suivre</span>
                </div>
                <div class="cartes-newsletter">
                  <div class="newsletter-container">
                    <div class="newsletter-2">
                      <div class="newsletter-1">
                        <div class="flex-row">
                          <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                          <div class="overlap-group1">
                            <div class="avatars-group-3-horizontal">
                              <div class="avatar-container">
                                <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                                <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                                <img class="avatar-3" src="{{ asset('public/img/avatar-3-9@2x.png') }}" alt="Avatar 3" />
                              </div>
                            </div>
                            <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                              <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                            </div>
                          </div>
                          <div class="frame-1197-1">
                            <div class="ne-plus-suivre valign-text-middle archivo-medium-white-12px">
                              <span><span class="archivo-medium-white-12px">Suivre</span> </span>
                            </div>
                          </div>
                        </div>
                        <div class="overlap-group-3">
                          <div class="badge"></div>
                          <div class="sublink-1">
                            <div class="h6-44 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                            </div>
                            <div class="h6-45 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Fréquence : 1 jour</span>
                            </div>
                            <div class="frame-1289-1">
                              <div class="h6-46 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                              </div>
                              <div class="overlap-group">
                                <div class="rectangle-1171"></div>
                                <div class="catgories valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1288-1">
                              <div class="h6-47 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                              </div>
                              <div class="overlap-group-4">
                                <div class="rectangle-1171-3"></div>
                                <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1290-1">
                              <div class="tag-10 archivo-medium-black-16px">
                                <span class="archivo-medium-black-16px">Tag :</span>
                              </div>
                              <div class="frame-1154-1">
                                <div class="overlap-group-2">
                                  <div class="rectangle-1171-2"></div>
                                  <div class="tag-badge-default">
                                    <div class="contents">
                                      <div class="text">
                                        <div class="badge-texte archivo-medium-white-16px">
                                          <span class="archivo-medium-white-16px">Badge texte</span>
                                        </div>
                                      </div>
                                      <div class="x-container"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1154-2">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="newsletter-2">
                      <div class="newsletter-1">
                        <div class="flex-row">
                          <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                          <div class="overlap-group1">
                            <div class="avatars-group-3-horizontal">
                              <div class="avatar-container">
                                <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                                <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                                <img class="avatar-3" src="{{ asset('public/img/avatar-3-4@2x.png') }}" alt="Avatar 3" />
                              </div>
                            </div>
                            <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                              <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                            </div>
                          </div>
                          <div class="frame-1197-1">
                            <div class="ne-plus-suivre valign-text-middle archivo-medium-white-12px">
                              <span><span class="archivo-medium-white-12px">Suivre</span> </span>
                            </div>
                          </div>
                        </div>
                        <div class="overlap-group-3">
                          <div class="badge"></div>
                          <div class="sublink-1">
                            <div class="h6-48 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                            </div>
                            <div class="h6-49 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Fréquence : 1 jour</span>
                            </div>
                            <div class="frame-1289-1">
                              <div class="h6-50 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                              </div>
                              <div class="overlap-group">
                                <div class="rectangle-1171"></div>
                                <div class="catgories valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1288-1">
                              <div class="h6-51 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                              </div>
                              <div class="overlap-group-4">
                                <div class="rectangle-1171-3"></div>
                                <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1290-1">
                              <div class="tag-11 archivo-medium-black-16px">
                                <span class="archivo-medium-black-16px">Tag :</span>
                              </div>
                              <div class="frame-1154-1">
                                <div class="overlap-group-2">
                                  <div class="rectangle-1171-2"></div>
                                  <div class="tag-badge-default">
                                    <div class="contents">
                                      <div class="text">
                                        <div class="badge-texte archivo-medium-white-16px">
                                          <span class="archivo-medium-white-16px">Badge texte</span>
                                        </div>
                                      </div>
                                      <div class="x-container"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1154-2">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="newsletter-container">
                    <div class="newsletter-2">
                      <div class="newsletter-1">
                        <div class="flex-row">
                          <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                          <div class="overlap-group1">
                            <div class="avatars-group-3-horizontal">
                              <div class="avatar-container">
                                <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                                <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                                <img class="avatar-3" src="{{ asset('public/img/avatar-3-5@2x.png') }}" alt="Avatar 3" />
                              </div>
                            </div>
                            <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                              <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                            </div>
                          </div>
                          <div class="frame-1197-1">
                            <div class="ne-plus-suivre valign-text-middle archivo-medium-white-12px">
                              <span><span class="archivo-medium-white-12px">Suivre</span> </span>
                            </div>
                          </div>
                        </div>
                        <div class="overlap-group-3">
                          <div class="badge"></div>
                          <div class="sublink-1">
                            <div class="h6-52 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                            </div>
                            <div class="h6-53 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Fréquence : 7 jours</span>
                            </div>
                            <div class="frame-1289-1">
                              <div class="h6-54 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                              </div>
                              <div class="overlap-group">
                                <div class="rectangle-1171"></div>
                                <div class="catgories valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1288-1">
                              <div class="h6-55 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                              </div>
                              <div class="overlap-group-4">
                                <div class="rectangle-1171-3"></div>
                                <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1290-1">
                              <div class="tag-12 archivo-medium-black-16px">
                                <span class="archivo-medium-black-16px">Tag :</span>
                              </div>
                              <div class="frame-1154-1">
                                <div class="overlap-group-2">
                                  <div class="rectangle-1171-2"></div>
                                  <div class="tag-badge-default">
                                    <div class="contents">
                                      <div class="text">
                                        <div class="badge-texte archivo-medium-white-16px">
                                          <span class="archivo-medium-white-16px">Badge texte</span>
                                        </div>
                                      </div>
                                      <div class="x-container"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="newsletter-2">
                      <div class="newsletter-1">
                        <div class="flex-row">
                          <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                          <div class="overlap-group1">
                            <div class="avatars-group-3-horizontal">
                              <div class="avatar-container">
                                <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                                <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                                <img class="avatar-3" src="{{ asset('public/img/avatar-3-11@2x.png') }}" alt="Avatar 3" />
                              </div>
                            </div>
                            <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                              <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                            </div>
                          </div>
                          <div class="frame-1197-1">
                            <div class="ne-plus-suivre valign-text-middle archivo-medium-white-12px">
                              <span><span class="archivo-medium-white-12px">Suivre</span> </span>
                            </div>
                          </div>
                        </div>
                        <div class="overlap-group-3">
                          <div class="badge"></div>
                          <div class="sublink-1">
                            <div class="h6-56 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                            </div>
                            <div class="h6-57 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Fréquence : 1 jour</span>
                            </div>
                            <div class="frame-1289-1">
                              <div class="h6-58 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                              </div>
                              <div class="overlap-group">
                                <div class="rectangle-1171"></div>
                                <div class="catgories valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1288-1">
                              <div class="h6-59 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                              </div>
                              <div class="overlap-group-4">
                                <div class="rectangle-1171-3"></div>
                                <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1290-1">
                              <div class="tag-13 archivo-medium-black-16px">
                                <span class="archivo-medium-black-16px">Tag :</span>
                              </div>
                              <div class="frame-1154-1">
                                <div class="overlap-group-2">
                                  <div class="rectangle-1171-2"></div>
                                  <div class="tag-badge-default">
                                    <div class="contents">
                                      <div class="text">
                                        <div class="badge-texte archivo-medium-white-16px">
                                          <span class="archivo-medium-white-16px">Badge texte</span>
                                        </div>
                                      </div>
                                      <div class="x-container"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="newsletter-container">
                    <div class="newsletter-2">
                      <div class="newsletter-1">
                        <div class="flex-row">
                          <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                          <div class="overlap-group1">
                            <div class="avatars-group-3-horizontal">
                              <div class="avatar-container">
                                <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                                <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                                <img class="avatar-3" src="{{ asset('public/img/avatar-3-9@2x.png') }}" alt="Avatar 3" />
                              </div>
                            </div>
                            <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                              <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                            </div>
                          </div>
                          <div class="frame-1197-1">
                            <div class="ne-plus-suivre valign-text-middle archivo-medium-white-12px">
                              <span><span class="archivo-medium-white-12px">Suivre</span> </span>
                            </div>
                          </div>
                        </div>
                        <div class="overlap-group-3">
                          <div class="badge"></div>
                          <div class="sublink-1">
                            <div class="h6-60 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                            </div>
                            <div class="h6-61 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Fréquence : 1 jour</span>
                            </div>
                            <div class="frame-1289-1">
                              <div class="h6-62 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                              </div>
                              <div class="overlap-group">
                                <div class="rectangle-1171"></div>
                                <div class="catgories valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1288-1">
                              <div class="h6-63 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                              </div>
                              <div class="overlap-group-4">
                                <div class="rectangle-1171-3"></div>
                                <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1290-1">
                              <div class="tag-14 archivo-medium-black-16px">
                                <span class="archivo-medium-black-16px">Tag :</span>
                              </div>
                              <div class="frame-1154-1">
                                <div class="overlap-group-2">
                                  <div class="rectangle-1171-2"></div>
                                  <div class="tag-badge-default">
                                    <div class="contents">
                                      <div class="text">
                                        <div class="badge-texte archivo-medium-white-16px">
                                          <span class="archivo-medium-white-16px">Badge texte</span>
                                        </div>
                                      </div>
                                      <div class="x-container"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1154-3">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="newsletter-2">
                      <div class="newsletter-1">
                        <div class="flex-row">
                          <img class="avatar-4" src="{{ asset('public/img/avatar-4-5@2x.png') }}" alt="Avatar 4" />
                          <div class="overlap-group1">
                            <div class="avatars-group-3-horizontal">
                              <div class="avatar-container">
                                <img class="avatar-1" src="{{ asset('public/img/avatar-1-8@2x.png') }}" alt="Avatar 1" />
                                <img class="avatar-2" src="{{ asset('public/img/avatar-2-8@2x.png') }}" alt="Avatar 2" />
                                <img class="avatar-3" src="{{ asset('public/img/avatar-3-4@2x.png') }}" alt="Avatar 3" />
                              </div>
                            </div>
                            <div class="nom-de-la-newsletter archivo-bold-hit-gray-14px">
                              <span class="archivo-bold-hit-gray-14px">Nom de la Newsletter</span>
                            </div>
                          </div>
                          <div class="frame-1197-1">
                            <div class="ne-plus-suivre valign-text-middle archivo-medium-white-12px">
                              <span><span class="archivo-medium-white-12px">Suivre</span> </span>
                            </div>
                          </div>
                        </div>
                        <div class="overlap-group-3">
                          <div class="badge"></div>
                          <div class="sublink-1">
                            <div class="h6-64 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Recherche initiale : XXXX</span>
                            </div>
                            <div class="h6-65 archivo-semi-bold-black-14px">
                              <span class="archivo-semi-bold-black-14px">Fréquence : 3 jours</span>
                            </div>
                            <div class="frame-1289-1">
                              <div class="h6-66 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Catégorie :</span>
                              </div>
                              <div class="overlap-group">
                                <div class="rectangle-1171"></div>
                                <div class="catgories valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Catégories</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1288-1">
                              <div class="h6-67 archivo-semi-bold-black-14px">
                                <span class="archivo-semi-bold-black-14px">Sous catégories :</span>
                              </div>
                              <div class="overlap-group-4">
                                <div class="rectangle-1171-3"></div>
                                <div class="sous-catgorie-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">Sous catégorie</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1290-1">
                              <div class="tag-15 archivo-medium-black-16px">
                                <span class="archivo-medium-black-16px">Tag :</span>
                              </div>
                              <div class="frame-1154-1">
                                <div class="overlap-group-2">
                                  <div class="rectangle-1171-2"></div>
                                  <div class="tag-badge-default">
                                    <div class="contents">
                                      <div class="text">
                                        <div class="badge-texte archivo-medium-white-16px">
                                          <span class="archivo-medium-white-16px">Badge texte</span>
                                        </div>
                                      </div>
                                      <div class="x-container"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                                <div class="tag-badge-default-1">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="frame-1154-2">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171-2"></div>
                                <div class="tag-badge-default">
                                  <div class="contents">
                                    <div class="text">
                                      <div class="badge-texte archivo-medium-white-16px">
                                        <span class="archivo-medium-white-16px">Badge texte</span>
                                      </div>
                                    </div>
                                    <div class="x-container"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="tag-badge-default-1">
                                <div class="contents">
                                  <div class="text">
                                    <div class="badge-texte archivo-medium-white-16px">
                                      <span class="archivo-medium-white-16px">Badge texte</span>
                                    </div>
                                  </div>
                                  <div class="x-container"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
