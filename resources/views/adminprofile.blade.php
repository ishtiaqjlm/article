<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png') }}" /> -->
    <meta name="viewport" content="width=1922, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png'" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/admin-2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body style="margin: 0; background: #ffffff">
    <div id="myModal" class="modal fade ">
     <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
             <img class="image-1" src="{{ asset('public/img/image-1-2@2x.png'); }}" alt="image 1" />
          <form action="{{url('/')}}/register" method="POST">
            @csrf
          <div class="formulaire">
            <div class="form-email">
              <div class="label"><span>Name</span></div>
              <input type="text" name="name" value="" id="name" class="form-control">
              <!-- <div class="frame">
                <div class="name inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">azerty@qolumn.fr</span>
                </div>
              </div> -->
            </div>
            <div class="form-email">
              <div class="label"><span>Email</span></div>
              <input type="text" name="username" value="" id="username" class="form-control">
              <!-- <div class="frame">
                <div class="name inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">azerty@qolumn.fr</span>
                </div>
              </div> -->
            </div>
            <div class="form-password">
              <div class="password"><span>Mot de passe</span></div>
              <input type="password" name="password" value="" id="password" class="form-control">
              <!-- <div class="frame">
                <div class="password-1 inter-normal-quill-gray-14px">
                  <span class="inter-normal-quill-gray-14px">***************</span>
                </div>
              </div> -->
            </div>
            <div class="form-password">
              <div class="password"><span>Role</span></div>
              <select name="role" id="role" class="form-control">
                <option value="0">Subscriber</option>
                <option value="1">Admin</option>
              </select>
            </div>
            <div class="form-button" align="center">
              <div class="name-1 archivo-bold-white-16px"><br/><br/>
                <button class="archivo-bold-white-16px" style="color: #5e1557;">Connexion</button>
                <br/><br/>
              </div>
            </div>
          </div>
         </form>
            </div>
        </div>
     </div>
    </div>
    <div id="myModal2" class="modal fade ">
     <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un tag</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            
          <form action="{{url('/')}}/create_tag" method="POST">
            @csrf
          <div class="formulaire">
            <div class="form-email">
              <div class="label"><span>Tag Name</span></div>
              <input type="text" name="tagname" value="" id="tagname" class="form-control">
            </div>
            <div class="form-button" align="center">
              <div class="name-1 archivo-bold-white-16px"><br/><br/>
                <button class="archivo-bold-white-16px" style="color: #5e1557;">Connexion</button>
                <br/><br/>
              </div>
            </div>
          </div>
         </form>
         </div>
        </div>
     </div>
    </div>
    <div id="myModal3" class="modal fade ">
     <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Action</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div class="formulaire">
            <div class="form-button" align="center">
              <div class="name-1 archivo-bold-white-16px">
                <div style="color:black;">Are you sure want to delete this tag</div>
                <button class="archivo-bold-white-16px ytd" id="ytd" style="color: red;">Yes</button>
                <button class="archivo-bold-white-16px  ntd"  id="ntd" style="color: green;">No</button>
                <br/><br/>
              </div>
            </div>
          </div>
         </div>
        </div>
     </div>
    </div>
    <div id="myModal4" class="modal fade ">
     <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Action</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div class="formulaire">
            <div class="form-button" align="center">
              <div class="name-1 archivo-bold-white-16px">
                <div style="color:black;">Are you sure want to delete this user</div>
                <button class="archivo-bold-white-16px yud" id="yud" style="color: red;">Yes</button>
                <button class="archivo-bold-white-16px  nud"  id="nud" style="color: green;">No</button>
                <br/><br/>
              </div>
            </div>
          </div>
         </div>
        </div>
     </div>
    </div>
    <input type="hidden" id="anPageName" name="page" value="admin-2" />
    <div class="container-center-horizontal">
      <div class="admin-2 screen">
        <div class="page">
          @include('sidebar')
          <div class="contenu">
            @include('header')
      <!--  <div class="group-1209">
              <div class="overlap-group4">
                <div class="add-button"></div>
                <div class="frame-1185">
                  <div class="catgories-1 roboto-medium-scarlet-gum-24px">
                    <span class="roboto-medium-scarlet-gum-24px"> Profil Administrateur</span>
                  </div>
                  <div class="notification">
                    <div class="ellipse-94"></div>
                  </div>
                  <img class="cog-1" src="{{ asset('public/img/cog-1-1@2x.png') }}" alt="cog 1" />
                  <img class="profile" src="{{ asset('public/img/profile-1@2x.png') }}" alt="Profile" />
                  <div class="mahmud-container">
                    <div class="asfak-mahmud valign-text-middle roboto-medium-nile-blue-16px">
                      <span><span class="roboto-medium-nile-blue-16px">Asfak Mahmud</span> </span>
                    </div>
                    <div class="asfakmahmudbdgmaillcom valign-text-middle roboto-normal-stack-12px">
                      <span><span class="roboto-normal-stack-12px">asfakmahmudbd@gmaill.com</span> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="number-box">
              <div class="number-box-item">
                <div class="overlap-group1-1">
                  <div class="overlap-group-1">
                    <div class="flex-col-1">
                      <div class="flex-row-1">
                        <div class="oval"></div>
                        <img class="path" src="{{ asset('public/img/path-3@2x.png') }}" alt="Path" />
                      </div>
                      <img class="path-1" src="{{ asset('public/img/path-1@2x.png') }}" alt="Path" />
                    </div>
                    <img class="path-2" src="{{ asset('public/img/path-2@2x.png') }}" alt="Path" />
                  </div>
                  <div class="number mulish-bold-rhino-30px">
                    <span class="mulish-bold-rhino-30px">
                     @if (count($user) > 0)
                          {{ count($user) }}
                     @endif 
                    </span>
                  </div>
                  <div class="followers mulish-normal-waikawa-gray-14px">
                    <span class="mulish-normal-waikawa-gray-14px">Utilisateurs</span>
                  </div>
                </div>
              </div>
              <div class="number-box-item">
                <div class="overlap-group2">
                  <div class="overlap-group-2"><img class="icon-1" src="{{ asset('public/img/icon-1@2x.png') }}" alt="Icon" /></div>
                  <div class="x248 mulish-bold-rhino-30px">
                    <span class="mulish-bold-rhino-30px">{{$article}}</span>
                  </div>
                  <div class="posts mulish-normal-waikawa-gray-14px">
                    <span class="mulish-normal-waikawa-gray-14px">Ressources disponibles</span>
                  </div>
                </div>
              </div>
              <div class="number-box-item">
                <div class="overlap-group3">
                  <div class="overlap-group-3"><img class="apps-1-1" src="{{ asset('public/img/apps-1-7@2x.png') }}" alt="apps 1" /></div>
                  <div class="number mulish-bold-rhino-30px"><span class="mulish-bold-rhino-30px">{{$category}}</span></div>
                  <div class="likes mulish-normal-waikawa-gray-14px">
                    <span class="mulish-normal-waikawa-gray-14px">Catégories</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="dashboard">
              @if(isset($msg))
              <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong>{{$msg}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
              @endif
              @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
              </div>
              @endif
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
              @if ($success_del_user = Session::get('success_del_user'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $success_del_user }}</strong>
              </div>
              @endif
              @if ($error_del_user = Session::get('error_del_user'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $error_del_user }}</strong>
              </div>
              @endif
              <div class="liste-utilisateur">
                <div class="frame-97">
                  <div class="frame-97">
                    <div class="dropdowninput">
                      <div class="dropdown-list"><span>Poste</span></div>
                      <img class="icarrow" src="{{ asset('public/img/ic-arrow-1@2x.png') }}" alt="ic/arrow" />
                    </div>
                  </div>
                </div>
                <div class="frame-965">
                  <div class="search-input">
                    <img class="icon" src="{{ asset('public/img/icon-search-2@2x.png') }}" alt="icon-search" />
                    <div class="search roboto-normal-mist-gray-15px">
                      <span class="roboto-normal-mist-gray-15px">Search</span>
                    </div>
                  </div>
                  <div class="frame-936">
                    <div class="button">
                      <img class="icon" src="{{ asset('public/img/icon-user-1@2x.png') }}" alt="icon-user" />
                      <div class="invite roboto-medium-white-15px">
                        <span style="cursor:pointer;" class="roboto-medium-white-15px" data-toggle="modal" data-target="#myModal" >Ajouter un utilisateur</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="liste-des-utilisateurs archivo-bold-scarlet-gum-20px">
                  <span class="archivo-bold-scarlet-gum-20px">Liste des utilisateurs</span>
                </div>
                <div class="table-1">
                  <div class="head roboto-medium-concord-14px">
                    <div class="user">
                      <div class="chekbox">
                        <div class="check-box"></div>
                      </div>
                      <div class="name-1"><span class="roboto-medium-concord-14px">Utilisateurs</span></div>
                    </div>
                    <div class="status"><span class="roboto-medium-concord-14px">Statut</span></div>
                    <div class="position"><span class="roboto-medium-concord-14px">Poste</span></div>
                    <div class="activity"><span class="roboto-medium-concord-14px">Activité</span></div>
                  </div>
                </div>
                @foreach ($user as $key =>$data)
                <div class="table roboto-normal-concord-13px">
                  <div class="chek-box-name">
                    <div class="chekbox">
                      <div class="check-box"></div>
                    </div>
                    <div class="avatar-name">
                      <img class="ellipse" src="{{ asset('public/img/ellipse-7@2x.png') }}" alt="Ellipse" />
                      <div class="name roboto-medium-tuna-15px">
                        <span class="roboto-medium-tuna-15px">{{$data->name}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="active">
                    <span class="roboto-normal-concord-13px">
                    @if($data->role == 0)
                    Subscriber
                    @elseif($data->role == 1)
                    Administrator
                    @endif
                    </span>
                  </div>
                  <div class="designer"><span class="roboto-normal-concord-13px">juriste</span></div>
                  <p class="x2-days-ago"><span class="roboto-normal-concord-13px">Il y a 2 jours</span></p>
                  <img class="akar-iconscross delete_user" src="{{ asset('public/img/akar-icons-cross-13@2x.png') }}" alt="akar-icons:cross" data-id="usr{{$data->id}}" />
                </div>
                @endforeach
              </div>
              <div class="tag">
                <div class="flex-row-2">
                  <div class="flex-col-2">
                    <div class="titre">
                      <div class="h5 montserrat-bold-black-pearl-16px">
                        <span class="montserrat-bold-black-pearl-16px">Tag</span>
                      </div>
                    </div>
                    <div class="input-tag">
                      <div class="search-1 montserrat-normal-sonic-silver-14px">
                        <span class="montserrat-normal-sonic-silver-14px">Nouveau tag</span>
                      </div>
                    </div>
                  </div>
                  <div class="ajouter-une-source">
                    <img
                      class="akar-iconscircle-plus"
                      src="{{ asset('public/img/akar-icons-circle-plus-1@2x.png') }}"
                      alt="akar-icons:circle-plus"
                    />
                    <div class="invite-1 roboto-medium-white-15px">
                      <span style="cursor:pointer;" class="roboto-medium-white-15px"  data-toggle="modal" data-target="#myModal2">Ajouter un tag</span>
                    </div>
                  </div>
                </div>
                <div class="liste-tag-1">
                  <div class="liste-tag">
                    <div>
                     <div class="container">
                      <div class="row">
                       @foreach ($tag as $key =>$data)
                        <div class="col-lg-2" style="height: 50px;">
                          <div class="ajouter-une-source">
                           <div class="invite-1 roboto-medium-white-15px">
                            <span class="roboto-medium-white-15px">{{$data->name}}</span>
                          </div>&nbsp;<i class="fa fa-window-close" data-id="tag{{$data->id}}" style="font-size:20px;color:white;cursor:pointer;"></i>
                         </div>
                        </div>
                       @endforeach
                       <div style="display:none;" id="testtest">{{$key}}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="source">
                <div class="flex-col-3">
                  <div class="sources roboto-medium-scarlet-gum-24px">
                    <span class="roboto-medium-scarlet-gum-24px">Sources</span>
                  </div>
                  <p class="tlcharger-le-table valign-text-middle archivo-normal-black-16px">
                    <span
                      ><span class="archivo-normal-black-16px"
                        >Télécharger le tableau récapitulatif des sources présentent sur la plateforme.
                        <br /><br /><br /></span
                      ><span class="archivo-normal-black-16px">Dernière mise à jour 20/10/2022</span>
                    </span>
                  </p>
                </div>
                <div class="tlcharcher-une-soure">
                  <div class="overlap-group-4">
                    <div class="rectangle-1183"></div>
                    <div class="tlcharger valign-text-middle archivo-bold-white-16px">
                      <span><span class="archivo-bold-white-16px">Télécharger</span> </span>
                    </div>
                  </div>
                </div>
                <div class="proposer-une-nouvelle-source">
                  <img
                    class="akar-iconscircle-plus-1"
                    src="{{ asset('public/img/akar-icons-circle-plus-1@2x.png') }}"
                    alt="akar-icons:circle-plus"
                  />
                  <div class="invite-2 roboto-medium-white-15px">
                    <span class="roboto-medium-white-15px">Proposer une nouvelle source</span>
                  </div>
                </div>
              </div>
              <div class="group-1241">
                <div class="contacter-lditeur-du-site roboto-medium-scarlet-gum-24px">
                  <span class="roboto-medium-scarlet-gum-24px">Contacter l’éditeur du site</span>
                </div>
                <div class="overlap-group1-2">
                  <div class="group-1240">
                    <div class="form-fieldtall-container">
                      <div class="form-fieldtall">
                        <div class="text-field poppins-normal-waterloo--14px">
                          <span class="poppins-normal-waterloo--14px">Nom</span>
                        </div>
                        <div class="text-field-1 poppins-normal-ghost-14px">
                          <span class="poppins-normal-ghost-14px">eg. Jack</span>
                        </div>
                        <img class="line" src="{{ asset('public/img/line-2@2x.png') }}" alt="line" />
                      </div>
                      <div class="form-fieldtall">
                        <div class="text-field poppins-normal-waterloo--14px">
                          <span class="poppins-normal-waterloo--14px">Prénom</span>
                        </div>
                        <div class="text-field-1 poppins-normal-ghost-14px">
                          <span class="poppins-normal-ghost-14px">eg. Samuel</span>
                        </div>
                        <img class="line" src="{{ asset('public/img/line-2@2x.png') }}" alt="line" />
                      </div>
                    </div>
                    <div class="form-fieldcompact">
                      <div class="text-field-2 poppins-normal-waterloo--14px">
                        <span class="poppins-normal-waterloo--14px">Votre message</span>
                      </div>
                      <img class="line-2" src="{{ asset('public/img/line-4@2x.png') }}" alt="line" />
                    </div>
                    <div class="buttontall-fixedprimary">
                      <div class="text-1 inter-bold-white-12px"><span class="inter-bold-white-12px">Envoyer</span></div>
                    </div>
                  </div>
                  <div class="button-1">
                    <img class="akar-iconssend" src="{{ asset('public/img/akar-icons-send-1@2x.png') }}" alt="akar-icons:send" />
                    <div class="invite-3 roboto-medium-white-15px">
                      <span class="roboto-medium-white-15px">Envoyer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
          <div class="overlap-group5">
            <div class="qolumn valign-text-middle archivo-bold-scarlet-gum-20px">
              <span><span class="archivo-bold-scarlet-gum-20px">Qolumn</span> </span>
            </div>
            <div class="group-1267 archivo-normal-hot-toddy-20px">
              <div class="politique-de-confidentialit valign-text-middle">
                <span><span class="archivo-normal-hot-toddy-20px">Politique de confidentialité</span> </span>
              </div>
              <div class="mentions-lgales valign-text-middle">
                <span><span class="archivo-normal-hot-toddy-20px">Mentions légales</span> </span>
              </div>
            </div>
            <img class="rectangle-1193" src="{{ asset('public/img/rectangle-1193-9@2x.png') }}" alt="Rectangle 1193" />
          </div>
        </div>
        </div>
        <!--  -->
      </div>
    </div>
    <script>
      var url_tag_del    = "{{asset('/')}}delete_tag/";
      var url_usr_del    = "{{asset('/')}}delete_user/";
      var tid,uid;  
      $(document).ready(function(){
          $(document).on('click','.fa-window-close',function(e){
               console.log($(this).data('id'));
               $("#myModal3").modal('show');
               var rawid = $(this).data('id');
               var id    = rawid.replace("tag","");
                   tid   = id;    
          })

          $(document).on('click','.ytd,.ntd',function(e){
                  
                  console.log($(this).attr('id'));
                  var rawid = $(this).attr('id');
                  if(rawid == 'ytd'){
                  //var id    = rawid.replace("tag","");
                  //alert(url_tag_del+tid);
                    document.location=url_tag_del+tid;
                  }else{
                    $("#myModal3").modal('hide');        
                  }
               

          })
          //$("#myModal").modal('show');
          $(document).on('click','.delete_user',function(e){
                 
                  console.log($(this).data('id'));
                  $("#myModal4").modal('show');
                  var rawid = $(this).data('id');
                  var id    = rawid.replace("usr","");
                      uid   = id;
          })
          $(document).on('click','.yud,.nud',function(e){

                  console.log($(this).attr('id'));
                  var rawid = $(this).attr('id');
                  if(rawid == 'yud'){
                     //alert(url_usr_del+uid);
                     document.location=url_usr_del+uid;
                  }else{
                   $("#myModal4").modal('hide');         
                  }
           })
        });
  </script>
 </body>
</html>
