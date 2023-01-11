@if(!Session::has('name'))
  <script>window.location = "{{ asset('/') }}login";</script>
@endif
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png') }}" /> -->
    <meta name="viewport" content="width=1994, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/accueil2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="accueil2" />
    <div class="container-center-horizontal">
      <div class="accueil2 screen">
        <div class="page">
          @include('sidebar')
          <div class="contenue">
            <div class="header">
              <div class="overlap-group-2">
                <div class="add-button"></div>
                <div class="frame-1185">
                  <div class="catgories-1 roboto-medium-scarlet-gum-24px">
                    <span class="roboto-medium-scarlet-gum-24px">Accueil</span>
                  </div>
                  <div class="notification">
                    <div class="ellipse-94"></div>
                  </div>
                  <img class="cog-1" src="{{ asset('public/img/cog-1-1@2x.png') }}" alt="cog 1" />
                  <img class="profile" src="{{ asset('public/img/profile-1@2x.png') }}" alt="Profile" />
                  <div class="mahmud-container">
                    <div class="asfak-mahmud valign-text-middle roboto-medium-nile-blue-16px">
                      <span>
                        <span class="roboto-medium-nile-blue-16px">
                         @if(Session::has('name')) {{ Session::get('name')}} @endif
                        </span>
                       </span>
                    </div>
                    <div class="asfakmahmudbdgmaillcom valign-text-middle roboto-normal-stack-12px">
                      <span><span class="roboto-normal-stack-12px">@if(Session::has('email')) {{ Session::get('email')}} @endif</span> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-1244">
              <div class="section-recherche">
                <div class="recherche-section">
                  <div class="overlap-group-3">
                    <div class="que-recherchez-vous roboto-medium-scarlet-gum-24px">
                      <span class="roboto-medium-scarlet-gum-24px">Que recherchez-vous&nbsp;&nbsp;?</span>
                    </div>
                    <img class="bxbx-help-circle" src="{{ asset('public/img/bx-bx-help-circle-5@2x.png') }}" alt="bx:bx-help-circle" />
                  </div>
                  <div class="barre-de-recherche">
                    <img class="bxsearch-alt" src="{{ asset('public/img/bx-search-alt-3@2x.png') }}" alt="bx:search-alt" />
                    <div class="mot-cls"></div>
                  </div>
                  <div class="filtre">
                    <div class="filtre-item">
                      <div class="catgorie valign-text-middle roboto-normal-mountain-mist-14px">
                        <span>
                          <span class="roboto-normal-mountain-mist-14px">Catégorie</span>
                          <select  id="category-dropdown" class="form-control">
                            <option value=""> Select Catégorie </option>
                            @foreach ($categories as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                        </span>
                      </div>
                    </div>
                    <div class="filtre-item">
                      <div class="catgorie valign-text-middle roboto-normal-mountain-mist-14px">
                        <span>
                          <span class="roboto-normal-mountain-mist-14px">Sous-catégorie</span>
                          <select  id="category-dropdown" class="form-control">
                            <option value=""> Select Sous-catégorie </option>
                            @foreach ($subcategory as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                        </span>
                      </div>
                    </div>
                    <div class="box">
                      <div class="date">
                        <img class="calendar52" src="{{ asset('public/img/calendar52-1@2x.png') }}" alt="calendar52" />
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
                    <div class="call-to-action">
                      <div class="pesquisar valign-text-middle roboto-bold-white-16px">
                        <span><span class="roboto-bold-white-16px">Recherche</span> </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section-catgorie">
                <p class="parcourez-les-catgo roboto-medium-scarlet-gum-24px">
                  <span class="roboto-medium-scarlet-gum-24px">Parcourez les catégories et sous-catégories</span>
                </p>
                <div class="carrousel">
                  <img class="vector" src="{{ asset('public/img/vector-25@2x.png') }}" alt="Vector" />
                  <div class="group-1246">
                    <div class="group-1202">
                      <p class="surname archivo-normal-black-20px">
                        <span class="archivo-normal-black-20px">Le monde de la science</span>
                      </p>
                      <img class="rectangle-1197" src="{{ asset('public/img/rectangle-1197-1@2x.png') }}" alt="Rectangle 1197" />
                      <div class="overlap-group-4">
                        <div class="rectangle-1066"></div>
                        <div class="science valign-text-middle archivo-semi-bold-black-16px">
                          <span><span class="archivo-semi-bold-black-16px">Science</span> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="group-1247">
                    <p class="les-faits-qui-peuvent-vous-intresser archivo-normal-black-20px">
                      <span class="archivo-normal-black-20px">Les faits qui peuvent vous intéresser</span>
                    </p>
                    <img class="rectangle-1198" src="{{ asset('public/img/rectangle-1198-2@2x.png') }}" alt="Rectangle 1198" />
                    <div class="les-faits-qui-peuvent-vous-intresser-1">
                      <div class="group-container">
                        <div class="group-1205">
                          <div class="contrle-crise valign-text-middle archivo-semi-bold-black-16px">
                            <span><span class="archivo-semi-bold-black-16px">Contrôle-Crise</span> </span>
                          </div>
                        </div>
                        <div class="group-1203">
                          <div class="stream valign-text-middle archivo-semi-bold-black-16px">
                            <span><span class="archivo-semi-bold-black-16px">Stream</span> </span>
                          </div>
                        </div>
                      </div>
                      <div class="group-1204">
                        <div class="juridique-officiel valign-text-middle archivo-semi-bold-black-16px">
                          <span><span class="archivo-semi-bold-black-16px">Juridique-Officiel</span> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="group-1248">
                    <p class="ce-quen-pensent-les-gens archivo-normal-black-20px">
                      <span class="archivo-normal-black-20px">Ce qu’en pensent les gens</span>
                    </p>
                    <img class="rectangle-1199" src="{{ asset('public/img/rectangle-1199-1@2x.png') }}" alt="Rectangle 1199" />
                    <div class="group-1232">
                      <div class="group-1206">
                        <div class="agora valign-text-middle archivo-semi-bold-black-16px">
                          <span><span class="archivo-semi-bold-black-16px">Agora</span> </span>
                        </div>
                      </div>
                      <div class="group-1207">
                        <div class="ecosystme valign-text-middle archivo-semi-bold-black-16px">
                          <span><span class="archivo-semi-bold-black-16px">Ecosystème</span> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <img class="vector" src="{{ asset('public/img/vector-26@2x.png') }}" alt="Vector" />
                </div>
              </div>
              <div class="section-commentaire">
                <div class="derniers-commentaires roboto-medium-scarlet-gum-24px">
                  <span class="roboto-medium-scarlet-gum-24px">Derniers Commentaires</span>
                </div>
                <div class="carrousel-1">
                  <img class="vector" src="{{ asset('public/img/vector-25@2x.png') }}" alt="Vector" />
                  <div class="conversations-1">
                    <div class="frame-1193">
                      <div class="overlap-group">
                        <div class="x1">
                          <img class="image" src="{{ asset('public/img/image-5@2x.png') }}" alt="Image" />
                          <div class="frame-1193-1">
                            <div class="esthera-jackson archivo-bold-outer-space-12px">
                              <span class="archivo-bold-outer-space-12px">Esthera Jackson</span>
                            </div>
                            <div class="titre-de-larticle archivo-normal-outer-space-12px">
                              <span class="archivo-normal-outer-space-12px">Titre de l’article</span>
                            </div>
                            <p class="lorem-ipsum-dolor-si archivo-normal-slate-gray-16px">
                              <span class="archivo-normal-slate-gray-16px"
                                >Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem
                                ipsum dolor sit amet ...</span
                              >
                            </p>
                          </div>
                        </div>
                        <div class="join">
                          <div class="width-structure">
                            <div class="height-structure">
                              <div class="button-body">
                                <div class="text-1 valign-text-middle archivo-bold-white-10px">
                                  <span><span class="archivo-bold-black-10px">Voir</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="min-width">
                              <div class="content"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="conversations">
                    <div class="frame-1193">
                      <div class="overlap-group">
                        <div class="x1-1">
                          <img class="image" src="{{ asset('public/img/image-6@2x.png') }}" alt="Image" />
                          <div class="frame-1193-1">
                            <div class="esthera-jackson archivo-bold-outer-space-12px">
                              <span class="archivo-bold-outer-space-12px">Esthera Jackson</span>
                            </div>
                            <div class="titre-de-larticle archivo-normal-outer-space-12px">
                              <span class="archivo-normal-outer-space-12px">Titre de l’article</span>
                            </div>
                            <p class="lorem-ipsum-dolor-si archivo-normal-slate-gray-16px">
                              <span class="archivo-normal-slate-gray-16px"
                                >Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem
                                ipsum dolor sit amet ...</span
                              >
                            </p>
                          </div>
                        </div>
                        <div class="join">
                          <div class="width-structure">
                            <div class="height-structure">
                              <div class="button-body">
                                <div class="text valign-text-middle archivo-bold-ecru-white-10px">
                                  <span><span class="archivo-bold-ecru-white-10px">Voir</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="min-width">
                              <div class="content"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="conversations">
                    <div class="frame-1193">
                      <div class="overlap-group">
                        <div class="x1-2">
                          <img class="image" src="{{ asset('public/img/image-6@2x.png') }}" alt="Image" />
                          <div class="frame-1193-1">
                            <div class="esthera-jackson archivo-bold-outer-space-12px">
                              <span class="archivo-bold-outer-space-12px">Esthera Jackson</span>
                            </div>
                            <div class="titre-de-larticle archivo-normal-outer-space-12px">
                              <span class="archivo-normal-outer-space-12px">Titre de l’article</span>
                            </div>
                            <p class="lorem-ipsum-dolor-si archivo-normal-slate-gray-16px">
                              <span class="archivo-normal-slate-gray-16px"
                                >Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem
                                ipsum dolor sit amet ...</span
                              >
                            </p>
                          </div>
                        </div>
                        <div class="join">
                          <div class="width-structure">
                            <div class="height-structure">
                              <div class="button-body">
                                <div class="text valign-text-middle archivo-bold-ecru-white-10px">
                                  <span><span class="archivo-bold-ecru-white-10px">Voir</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="min-width">
                              <div class="content"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <img class="vector" src="{{ asset('public/img/vector-26@2x.png') }}" alt="Vector" />
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
