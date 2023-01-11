@include('header')
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="accueil" />
    <div class="container-center-horizontal">
      <div class="accueil screen">
        <img class="line-1" src="{{ asset('public/img/line-1-1@2x.png')}}" alt="Line 1" />
        @include('header')
        
        @include('sidebar')
        
        <div class="overlap-group3">
          <div class="frame-31"></div>
          <div class="group-1183">
            <div class="custom-form-control-search-input-style-1">
              <img class="icn-search" src="{{ asset('public/img/icn-search-2@2x.png');}}" alt="icn search" />
              <div class="search montserrat-normal-sonic-silver-14px">
                <span class="montserrat-normal-sonic-silver-14px">Recherche</span>
              </div>
            </div>
            <div class="filter">
              <div class="dropdown-toggle">
                <div class="category archivo-semi-bold-white-14px">
                  <span class="archivo-semi-bold-white-14px">Recherche</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="overlap-group2">
          <img class="rectangle-1171" src="{{ asset('public/img/rectangle-1171-1@2x.png');}}" alt="Rectangle 1171" />
          <div class="group-633">
            <div class="produits archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Produits</span>
            </div>
          </div>
          <div class="group-1186">
            <div class="produits archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Science</span>
            </div>
          </div>
          <div class="group-1184">
            <div class="produits-1 archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Stream</span>
            </div>
          </div>
          <div class="group-1187">
            <div class="produits-1 archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Ecosystème</span>
            </div>
          </div>
          <div class="group-1190">
            <div class="produits archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Officiel/Juridique</span>
            </div>
          </div>
          <div class="group-1185">
            <div class="produits archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Contrôle/Crise</span>
            </div>
          </div>
          <div class="group-1188">
            <div class="produits archivo-semi-bold-scarlet-gum-16px">
              <span class="archivo-semi-bold-scarlet-gum-16px">Vie pro</span>
            </div>
          </div>
          <div class="group-1191">
            <div class="produits-2"><span>Clients</span></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
