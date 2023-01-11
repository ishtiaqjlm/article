<div class="sidebar">
            <div class="flex-col">
              <div class="component-1">
                <img class="rectangle-1170" src="{{ asset('public/img/rectangle-1170-13@2x.png') }}" alt="Rectangle 1170" />
                <div class="overlap-group1">
                  <img class="collapse" src="{{ asset('public/img/collapse-13@2x.png') }}" alt="Collapse" />
                  <p class="x21092022-actualit archivo-medium-thistle-green-20px">
                    <span class="archivo-medium-thistle-green-20px">{{ date('d/m/Y') }}<br /></span
                    ><span class="archivo-light-thistle-green-10px"><br /></span
                    ><span class="archivo-light-thistle-green-15px">Actualités du 1/09/2022 au 16/09/2022 </span>
                  </p>
                </div>
              </div>
              <div class="menu">
                <a href="{{ asset('/accueil') }}">
                <div class="accueil">
                  <img class="x-alt-1" src="{{ asset('public/img/home-alt-1-1@2x.png') }}" alt="home-alt 1" />
                  <div class="accueil-1 valign-text-middle archivo-bold-scarlet-gum-16px">
                    <span><span class="archivo-bold-scarlet-gum-16px">Accueil</span> </span>
                  </div>
                </div>
                </a>
                @if(Request::path() == 'urgents' || Request::path() == 'je_lis_plus_tard' || Request::path() == 'j_ai_deja_lu' || Request::path() =='mes-recherches')
                 <a href="{{ asset('/categories') }}">
                  <div class="overlap-group-3">
                   <img class="apps-1" src="{{ asset('public/img/apps-1-1@2x.png') }}" alt="apps 1" />
                   <div class="@if(Request::path() == 'mes-recherches') catgories-1 @else catgories-2 @endif valign-text-middle archivo-normal-pale-sky-16px">
                   <span><span class="archivo-normal-storm-gray-16px">Catégories</span> </span>
                  </div>
                  </div>
                 </a>
                 @else
                <a href="{{ asset('/categories') }}">
                <div class="overlap-group-1">
                  <img class="apps-1" src="{{ asset('public/img/apps-1-1@2x.png') }}" alt="apps 1" />
                  <div class="catgories valign-text-middle archivo-normal-storm-gray-16px">
                    <span><span class="archivo-normal-storm-gray-16px">Catégories</span> </span>
                  </div>
                </div>
               </a>
                @endif
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
                    <img class="iconbookshelf" src="{{ asset('public/img/icon-bookshelf-15@2x.png') }}" alt="icon/bookshelf" />
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
                  <img class="sitemap-1" src="{{ asset('public/img/sitemap-1-32@2x.png') }}" alt="sitemap 1" />
                  <div class="mes-recherches valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Mes recherches</span> </span>
                  </div>
                </div>
                </a>
                <a href="{{ asset('/newsletter') }}">
                <div class="newsletter">
                  <img class="sitemap-1-4" src="{{ asset('public/img/sitemap-1-2@2x.png') }}" alt="sitemap 1" />
                  <div class="gestion-newsletter valign-text-middle archivo-normal-pale-sky-16px">
                    <span><span class="archivo-normal-pale-sky-16px">Gestion Newsletter</span> </span>
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
                <a href="{{ asset ('/logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <div class="logout">
                  <img class="line-12" src="{{ asset('public/img/line-12-1@2x.png') }}" alt="Line 12" />
                  <div class="flex-row">
                    <img class="vector-1" src="{{ asset('public/img/vector-1@2x.png') }}" alt="Vector" />
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