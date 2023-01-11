<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png'); }}" /> -->
    <meta name="viewport" content="width=1922, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/article-1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body style="margin: 0">
    <input type="hidden" id="anPageName" name="page" value="article-1" />
    <div class="container-center-horizontal">
      <div class="article-1 screen">
        <div class="lecture-article">
          @include('sidebar')
          <div class="contenu-de-la-page-article">
            <div class="group-1209">
              <div class="overlap-group-1">
                <div class="add-button"></div>
                <div class="frame-1185">
                  <p class="catgories-1 roboto-medium-scarlet-gum-24px">
                    <span class="roboto-medium-scarlet-gum-24px">&nbsp;</span
                    ><span class="roboto-medium-scarlet-gum-24px"
                      >Produits &gt; Ingrédients fonctionnels &gt; Article</span
                    ><span class="roboto-bold-scarlet-gum-24px"></span>
                  </p>
                  <div class="notification">
                    <div class="ellipse-94"></div>
                  </div>
                  <img class="cog-1" src="{{ asset('public/img/cog-1-17@2x.png'); }}" alt="cog 1" />
                  <img class="profile" src="{{ asset('public/img/profile-1@2x.png'); }}" alt="Profile" />
                  <div class="mahmud-container">
                    <div class="asfak-mahmud valign-text-middle roboto-medium-nile-blue-16px">
                      <span><span class="roboto-medium-nile-blue-16px">@if(Session::has('name')) {{ Session::get('name')}} @endif</span> </span>
                    </div>
                    <div class="asfakmahmudbdgmaillcom valign-text-middle roboto-normal-stack-12px">
                      <span><span class="roboto-normal-stack-12px">@if(Session::has('email')) {{ Session::get('email')}} @endif</span> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @if ($message = Session::get('success_delete'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
              </div>
              @endif
              @if ($error_delete = Session::get('error_delete'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $error_delete }}</strong>
              </div>
              @endif
              @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>Sucessfullly post</strong>
              </div>
              @endif
              @if ($error = Session::get('error'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>Error , Something went wrong</strong>
              </div>
              @endif
            <div class="entte">
              <div class="titre-et-tag-et-intrractions">
                <img class="image-3" src="{{ asset('public/img/image-3-1@2x.png'); }}" alt="image 3" />
                <div class="overlap-group2">
                  <div class="article-entte">
                    <div class="titre-et-date">
                      <div class="lorem-ipsum-dolor-sit valign-text-middle archivo-semi-bold-black-17px">
                        <span><span class="archivo-semi-bold-black-17px">{{ $articles[0]->title }}</span> </span>
                      </div>
                      <div class="date valign-text-middle archivo-normal-black-13px">
                        <span><span class="archivo-normal-black-13px">{{ $articles[0]->created_at }}</span> </span>
                      </div>
                    </div>
                    <div class="catgories-2">
                      <div class="badge-catgorie">
                        <div class="overlap-group-2">
                          <div class="rectangle-1171"></div>
                          <div class="catgories-3 valign-text-middle archivo-medium-white-16px">
                            <span><span class="archivo-medium-white-16px">{{ $articles[0]->categoryname }}</span> </span>
                          </div>
                        </div>
                        <div class="overlap-group1">
                          <div class="rectangle-1171-1"></div>
                          <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                            <span><span class="archivo-medium-white-16px">{{ $articles[0]->subcategoryname }}</span> </span>
                          </div>
                        </div>
                        <div class="badge">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[0]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                      <div class="catgorie">
                        <div class="badge">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[0]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                        <div class="badge">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[0]->tagname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                        <div class="badge">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[0]->categoryname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                        <div class="badge">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[0]->categoryname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                      <div class="badge-catgorie-1">
                        <div class="badge">
                          <div class="contents">
                            <div class="text">
                              <div class="badge-texte archivo-medium-white-16px">
                                <span class="archivo-medium-white-16px">{{ $articles[0]->categoryname }}</span>
                              </div>
                            </div>
                            <div class="x-container"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="group-1170">
                    <img class="group-1170-1" alt="Group 1170" id="u{{$articles[0]->id}}" src="{{ asset('public/img/urgent-74@2x.png') }}" alt="urgent" id='mark_urgent' onClick='mark_urgent("{{$articles[0]->id}}")' width="24" height="20" />
                    <div class="group-1225">
                      <img class="vector-1" id="l{{$articles[0]->id}}" src="{{ asset('public/img/vector-87@2x.png') }}" alt="Vector" width="22" height="20" onClick='mark_like("{{$articles[0]->id}}")' />
                      <div class="number archivo-light-indigo-17px">
                        <span class="archivo-light-indigo-17px">3</span>
                      </div>
                    </div>
                    <img class="vector-stroke" id="dj{{$articles[0]->id}}" src="{{ asset('public/img/d-j--lu-82@2x.png') }}" alt="dj lu" width="21" height="20" onClick='mark_read("{{$articles[0]->id}}")' />
                    <img class="iconbookshelf-1" id="ptard{{$articles[0]->id}}" onClick='mark_unread("{{$articles[0]->id}}")'
                                  src="{{ asset('public/img/a-lire-plus-tard-82@2x.png') }}" alt="icon/bookshelf" />
                  </div>
                </div>
              </div>
              <div class="overlap-group3">
                <div class="contenu-rserv-aux-abonnes archivo-bold-monza-12px">
                  <span class="archivo-bold-monza-12px">Contenu réservé aux abonnées</span>
                </div>
                <img class="group-1169" src="{{ asset('public/img/group-1169-1@2x.png'); }}" alt="Group 1169" />
              </div>
            </div>
            <div class="texte">
              <div class="overlap-group4">
                <p class="lorem-ipsum-dolor-si archivo-normal-black-20px">
                  <span class="archivo-normal-black-20px">
                    {{ $articles[0]->description }}
                  </span
                  >
                </p>
                <div class="rectangle-1178"></div>
              </div>
              <div class="cta">
                <div class="lire-la-suite">
                  <div class="overlap-group-3">
                    <div class="send rubik-medium-white-16px">
                      <span class="rubik-medium-white-16px">Lire la suite</span>
                    </div>
                  </div>
                </div>
                <div class="pdf">
                  <div class="overlap-group1-1">
                    <div class="rectangle-1183"></div>
                    <div class="gnrer-un-pdf valign-text-middle archivo-bold-white-16px">
                      <span><span class="archivo-bold-white-16px">Générer un pdf</span> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @if(isset($success))
             <div style="color:green;">Comment Post Successfully</div>
            @endif
            @if(isset($error))
             <div style="color:red;">Error in Posting Comment. Try again later</div>
            @endif
            <div class="commentaires">
              <div class="commentaire-container">
                <div class="ajouter-un-commentaire">
                  <img class="profile-1" src="{{ asset('public/img/profile-2@2x.png'); }}" alt="Profile" />
                  <div class="group-container">
                    <form action="{{asset('/')}}article_comment" id="comnt" name="form_comment" method="POST">
                      @csrf
                    <div class="group-8">
                     <input type="hidden" name="article_id" id="article_id" value="{{ $articles[0]->id }}">
                     <input type="hidden" name="user_id" id="user_id" value="@if(Session::has('id')) {{ Session::get('id')}} @endif">  
                     <textarea name="article_comment" id="article_comment" cols="200" rows="3">
                      Ajouter un commentaire
                     </textarea>
                     <input type="hidden" name="cr" value="c" id="cr">
                     <input type="hidden" name="cmntid" value="0" id="cmntid">
                     <input type="hidden" name="edit" value="0" id="edit">
                     
                    </div> 
                    <!-- <textarea>Ajouter un commentaire</textarea> -->
                    <div class="group-8-copy">
                      <div class="overlap-group-4">
                        <div class="send-1 rubik-medium-white-16px">
                          <button type="submit" id="submit_cmnt" class="rubik-medium-white-16px" style="background-color: #5e1557;">
                          Commenter</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
                <div class="commentaire1">
                  @foreach($comments as $key => $data)
                  <div class="flex-row-1">
                    <img class="oval" src="{{ asset('public/img/oval-1@1x.png'); }}" alt="Oval" />
                    <div class="amyrobson archivo-medium-oxford-blue-16px">
                      <span class="archivo-medium-oxford-blue-16px">{{$data->usercomment->name}}</span>
                    </div>
                    <div class="x1-month-ago archivo-normal-black-16px">
                      <span class="archivo-normal-black-16px">{{$data->created_at}}</span>
                      @if(Session::get('role') == 1)
                      <span style="font-size:20px;color:red;cursor:pointer;">
                       <span>&nbsp;&nbsp;<i class="fa fa-trash-o delete_comment" data-id="comment{{$data->id}}"  title="Delete Comment"></i></span>
                       <span>&nbsp;&nbsp;<i class="fa fa-edit edit_comment" data-id="comment{{$data->id}}" title="Edit Comment"></i></span>
                      </span>
                       @endif
                    </div>
                    <div class="group-4">
                      <img class="reply" src="{{ asset('public/img/reply@1x.png'); }}" alt="Reply" />
                      <div class="reply-1 archivo-medium-hot-toddy-16px">
                        <span class="archivo-medium-hot-toddy-16px crp"  data-n="crp">Répondre</span>
                      </div>
                    </div>
                  </div>
                  <p class="impressive-though-i archivo-normal-nevada-16px">
                    <span class="archivo-normal-nevada-16px">
                        {{$data->comment}}
                    </span>
                  </p>
                @if(count($data->reply)>0)  
                <div class="flex-row-2">
                <div class="rectangle"></div>
                <div class="rponse-container">
                  @foreach($data->reply as $reply)
                  <div class="rponse1">
                    <div class="flex-row-3">
                      <img class="oval-1" src="{{ asset('public/img/oval-2@2x.png'); }}" alt="Oval" />
                      <div class="ramsesmiron archivo-medium-oxford-blue-16px">
                        <span class="archivo-medium-oxford-blue-16px">{{$reply->userreply->name}}</span>
                      </div>
                      <div class="x1-week-ago archivo-normal-black-16px">
                        <span class="archivo-normal-black-16px">{{$reply->created_at->format('y-m-d')}}</span>
                      </div>
                      @if(Session::get('role') == 1)
                      <div class="x1-week-ago archivo-normal-black-16px">
                       <span  style="font-size:20px;color:red;cursor:pointer;">
                        <span>&nbsp;&nbsp;<i class="fa fa-trash-o delete_reply" title="Delete Reply" data-id="reply{{$reply->userreply->id}}"></i></span>
                        <span>&nbsp;&nbsp;<i class="fa fa-edit edit_reply" data-id="reply{{$reply->userreply->id}}" title="Edit Comment"></i></span>
                       </span>
                      </div>
                      @endif
                      <div class="group-4-1">
                        <div class="reply-container">
                          <img class="reply-2" src="{{ asset('public/img/reply-2@2x.png'); }}" alt="Reply" />
                          <div class="reply-3 archivo-medium-hot-toddy-16px">
                            <span class="archivo-medium-hot-toddy-16px rp" data-cid="{{$data->id}}" data-n="rp">Répondre</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    @php
                    $s ='@';
                    @endphp
                    <p class="maxblagun-if-youre rubik-normal-blue-violet-16px">
                     <span class="archivo-medium-scarlet-gum-16px">{{$s}}{{$data->usercomment->name}} </span>
                     <span class="archivo-normal-nevada-16px">{{$reply->replied_text}}</span>
                    </p>
                  </div>
                  @endforeach
                  </div>
                  </div>
                @endif
              @endforeach
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
            </div><!-- url changed -->
            <img class="rectangle-1193" src="{{ asset('public/img/rectangle-1193-9@2x.png'); }}" alt="Rectangle 1193" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>

var url_mark_argent    = "{{asset('/')}}mark_urgent/";
var url_mark_like      = "{{asset('/')}}mark_like/";
var url_mark_read      = "{{asset('/')}}mark_read/";
var url_mark_readlater = "{{asset('/')}}mark_readlater/";
function mark_urgent(id)

{
  console.log(id);
  console.log(url_mark_argent+id);
  
  $.ajax({
        url: url_mark_argent+id,
        method: "GET",
        success: function (data){
            console.log('Success: ',data);
            //var p = JSON.parse(data);
            console.log(data.success);
            console.log(data.last_insert_id);
            console.log("#u"+data.changed_id);
            if(data.success){
              $("#u"+data.changed_id).attr("src","https://www.onlygfx.com/wp-content/uploads/2017/12/urgent-stamp-1.png")
              alert('Article Mark as Urgent Success');
            }
        },
        error: function (data) {
            console.log('Error: ', data);
        }
    });
}
function mark_like(id){
  //https://en.wikipedia.org/wiki/File:Heart_coraz%C3%B3n.svg
  console.log(id);
  console.log(url_mark_like+id);
  
  $.ajax({
        url: url_mark_like+id,
        method: "GET",
        success: function (data){
            console.log('Success: ',data);
            //var p = JSON.parse(data);
            console.log(data.success);
            console.log(data.last_insert_id);
            console.log("#u"+data.changed_id);
            if(data.success){
              $("#l"+data.changed_id).attr("src","/articles/public/img/red-heart-icon.png")
              alert('Article Mark as Like Success');
            }
        },
        error: function (data) {
            console.log('Error: ', data);
        }
    });
}
function mark_read(id){

   
  console.log(id);
  console.log(url_mark_read+id);
  
  $.ajax({
        url: url_mark_read+id,
        method: "GET",
        success: function (data){
            console.log('Success: ',data);
            //var p = JSON.parse(data);
            console.log(data.success);
            console.log(data.last_insert_id);
            console.log("#u"+data.changed_id);
            if(data.success){
              $("#dj"+data.changed_id).attr("src","https://cdn.iconscout.com/icon/premium/png-256-thumb/already-2836080-2353678.png")
              alert('Article Mark as Read Already Success');
            }
        },
        error: function (data) {
            console.log('Error: ', data);
        }
    });

}
function mark_unread(id){

   
  console.log(id);
  console.log(url_mark_readlater+id);
  
  $.ajax({
        url: url_mark_readlater+id,
        method: "GET",
        success: function (data){
            console.log('Success: ',data);
            //var p = JSON.parse(data);
            console.log(data.success);
            console.log(data.last_insert_id);
            console.log("#u"+data.changed_id);
            if(data.success){
              $("#ptard"+data.changed_id).attr("src","https://icons.iconarchive.com/icons/icons8/ios7/24/Programming-Show-Property-icon.png")
                alert('Article Mark as Read Later Success');
            }
        },
        error: function (data) {
            console.log('Error: ', data);
        }
    });

}

      var url_comment_del    = "{{asset('/')}}delete_comment/";
      var url_reply_del      = "{{asset('/')}}delete_reply/";  
      $(document).ready(function(){
          //$("#myModal").modal('show');
          $(document).on('click','.delete_comment',function(e){
               console.log($(this).data('id'));
               if(confirm('Are you sure want to delete this')){
                  var rawid = $(this).data('id');
                  var id    = rawid.replace("comment","");
                  //alert(url_comment_del+id);
                  document.location=url_comment_del+id;
               }

          })

          //$("#myModal").modal('show');
          $(document).on('click','.delete_reply',function(e){
               console.log($(this).data('id'));
               if(confirm('Are you sure want to delete this')){
                  var rawid = $(this).data('id');
                  var id    = rawid.replace("reply","");
                  //alert(url_reply_del+id);
                  document.location=url_reply_del+id;
               }

          })
          $(document).on('click','.edit_comment',function(e){
                  
                  console.log($(this).data('id'));
                  var rawid = $(this).data('id');
                  var id    = rawid.replace("comment","");
                  $('#cmntid').val(id);
                  console.log($(this).parent().parent().parent().parent().parent().html());
                  //alert(url_comment_del+id);
                  //document.location=url_comment_del+id;
          })

          //$("#myModal").modal('show');
          $(document).on('click','.edit_reply',function(e){
                  
                  console.log($(this).data('id'));
                  //if(confirm('Are you sure want to delete this')){
                  var rawid = $(this).data('id');
                  var id    = rawid.replace("reply","");
                  //alert(url_reply_del+id);
                  //document.location=url_reply_del+id;
          })

          $(document).on('click','.crp,.rp',function(e){
               console.log($(this).data('n'));
               console.log($(this).data('cid'));
               var n=$(this).data('n');
               if(n=='rp'){
               $('#cr').val('rc');
               $('#cmntid').val($(this).data('cid'));
               }
               else{
               $('#cr').val('c');
               }
               $("#article_comment").focus();
          })
       

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
 }
});
</script>