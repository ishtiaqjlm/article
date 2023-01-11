            @if(!Session::has('name'))
             <script>window.location = "{{ asset('/') }}login";</script>
            @endif
            <div class="group-1209">
              <div class="overlap-group9">
                <div class="add-button"></div>
                <div class="frame-1185">
                  <div class="catgories-3 roboto-medium-scarlet-gum-24px">
                    <span class="roboto-medium-scarlet-gum-24px">Produits &gt; Alcool</span
                    ><span class="roboto-bold-scarlet-gum-24px"></span>
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
            </div>