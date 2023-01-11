
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/png href="https://animaproject.s3.amazonaws.com/home/favicon.png') }}" /> -->
    <meta name="viewport" content="width=1922, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png') }}" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/a-regarder.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="a-regarder" />
    <div class="container-center-horizontal">
      <div class="a-regarder screen">
        <div class="page">
        	@include('sidebar')
          
          <div class="contenue">
            @include('header')
            
            <div class="frame-1252">
              @if ($message = Session::get('success_msg'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $message }}</strong>
              </div>
              @endif
              @if ($error_msg = Session::get('error_msg'))
              <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>    
                  <strong>{{ $error_msg }}</strong>
              </div>
              @endif
              <div class="nouvelle-section-recherche">
                <div class="recherche-section">
                  <div class="overlap-group-4">
                    <div class="que-recherchez-vous roboto-medium-scarlet-gum-24px">
                      <span class="roboto-medium-scarlet-gum-24px">Que recherchez-vous&nbsp;&nbsp;?</span>
                    </div>
                    <img class="bxbx-help-circle" src="{{ asset('public/img/bx-bx-help-circle-5@2x.png') }}" alt="bx:bx-help-circle" />
                  </div>
                  <div class="barre-de-recherche">
                    
                  <form action="{{asset('/')}}readlater_search" method="POST" name="readlater_search" id="readlater_search">
                    @csrf
                    <img class="bxsearch-alt" src="{{ asset('public/img/bx-search-alt-6@2x.png') }}" alt="bx:search-alt" />
                    
                      <div class=""><input type="text" id="search_text" value="" name="search_text" placeholder="écrire le titre ou la description des articles ici" style="width:800px;border:1px solid black;" /></div>
                    
                  </div>

                  <div class="filtre">
                    <div class="filtre-item">
                      <div class="catgorie valign-text-middle roboto-normal-mountain-mist-14px">
                        <span>
                          <span class="roboto-normal-mountain-mist-14px">
                          <select name="catdd" id="catdd" style="width:130px;">  
                            <option value="">Catégorie</option>
                            @foreach($categories as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                          </select>
                          </span> 
                        </span>
                      </div>
                    </div>
                    <div class="filtre-item">
                      <div class="catgorie valign-text-middle roboto-normal-mountain-mist-14px">
                        <span>
                          <span class="roboto-normal-mountain-mist-14px">
                          <select name="subcatdd" id="subcatdd" style="width:130px;"> 
                            <option value="">Sous-catégorie</option>
                          </select> 
                          </span>
                        </span>
                      </div>
                    </div>
                    <div class="priode">
                      <div class="data">
                        <img class="calendar52" src="{{ asset('public/img/calendar52-1@2x.png') }}" alt="calendar52" />
                        <div class="priode-1 valign-text-middle roboto-normal-mountain-mist-14px">
                          <span>
                            <span class="roboto-normal-mountain-mist-14px">
                              <select name="dddd" id="dddd">
                                <option value="">Période</option>
                                @foreach($day as $data)
                                <option value="{{$data->id}}">{{$data->days}}</option>
                                @endforeach
                              </select>
                            </span>
                           </span>
                        </div>
                      </div>
                    </div>
                    <div class="bax">
                      <div class="badge-texte-1 valign-text-middle roboto-normal-mountain-mist-14px">
                        <span>
                          <span class="roboto-normal-mountain-mist-14px">
                            <select name="tagsdd" id="tagsdd"> 
                             <option value="">Badge tag</option>
                             @foreach($tags as $data)
                             <option value="{{$data->id}}">{{$data->name}}</option>
                             @endforeach
                            </select>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                  </form>
                  <form action="{{asset('/')}}save_search" method="POST" name="save_search" id="save_search">
                    @csrf
                    <input type="hidden" name="scat" id="scat" value="">
                    <input type="hidden" name="ssubcat" id="ssubcat" value="">
                    <input type="hidden" name="tsearch" id="tsearch" value="">
                    <input type="hidden" name="sdays" id="sdays" value="">
                    <input type="hidden" name="stags" id="stags" value="">
                  </form>
                  <form action="{{asset('/')}}create_newsletter" method="POST" name="create_newsletter" id="create_newsletter">
                    @csrf
                    <input type="hidden" name="sscat" id="sscat" value="">
                    <input type="hidden" name="sssubcat" id="sssubcat" value="">
                    <input type="hidden" name="stsearch" id="stsearch" value="">
                    <input type="hidden" name="ssdays" id="ssdays" value="">
                    <input type="hidden" name="sstags" id="sstags" value="">
                    <input type="hidden" name="pagename" id="pagename" value="je_lis_plus_tard">
                  </form>
                  <div id="show_err" style="color:red;"></div>
                  <div class="cta">
                    <div class="call-to-action recherche" style="cursor: pointer;">
                      <div class="pesquisar valign-text-middle roboto-bold-white-16px">
                        <span>
                          <span class="roboto-bold-white-16px" style="cursor:pointer">
                           Recherche
                          </span> 
                        </span>
                      </div>
                    </div>
                    <div class="call-to-action-1 nwsltter" style="cursor: pointer;">
                      <div class="crer-une-newsletter valign-text-middle roboto-bold-white-16px">
                        <span><span class="roboto-bold-white-16px">Créer une newsletter</span> </span>
                      </div>
                    </div>
                    <div class="call-to-action-2 save_search" style="cursor: pointer;">
                      <div class="sauvegarder-la-recherche valign-text-middle roboto-bold-white-16px">
                        <span><span class="roboto-bold-white-16px">Sauvegarder la recherche</span> </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cartes-prsentant-les-articles">
                @foreach ($articles as $key =>$data)
                  @if($key%3==0)
                  <div class="frame-117" >
                  @endif
                  <div class="article-rcent-carte">
                    <div class="overlap-group">
                      <div class="titre-et-date">
                        <div class="lorem-ipsum-dolor-sit valign-text-middle archivo-semi-bold-black-17px">
                          <span><span class="archivo-semi-bold-black-17px">{{ $data->title }}</span> </span>
                        </div>
                        <div class="date valign-text-middle archivo-normal-black-13px">
                          <span><span class="archivo-normal-black-13px">{{ $data->created_at }}</span> </span>
                        </div>
                      </div>
                      <div class="overlap-group-1">
                        <img class="logo" src="{{ asset('public/img/logo-91@2x.png') }}" alt="logo" />
                        <div class="frame-1291">
                          <div class="catgories">
                            <div class="badge-catgorie">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171"></div>
                                <div class="catgories-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">{{ $data->categoryname }}</span> </span>
                                </div>
                              </div>
                              <div class="overlap-group1">
                                <div class="rectangle-1171-1"></div>
                                <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">{{ $data->subcategoryname }}</span> </span>
                                </div>
                              </div>
                            </div>
                            <div class="badge-catgorie-container">
                              @if(isset($data->tags))
                              @foreach($data->tags as $tags)
                                <button class="btn btn-maroon">{{ $tags->article_tag->name }}</button>
                              @endforeach
                              @else
                               @php
                                $article_tags=App\Models\ArticleTags::where('article_id',$data->id)->get();
                               @endphp 
                                @foreach($article_tags as $at)
                                 @php
                                  $tags=App\Models\Tags::where('id',$at->tag_id)->get();
                                 @endphp
                                   @foreach($tags as $tags) 
                                    <button class="btn btn-maroon">{{ $tags->name }}</button>
                                   @endforeach 
                                @endforeach 
                              @endif
                             </div>
                          </div>
                          <div class="group-1291">
                            <p class="lorem-ipsum-dolor-si archivo-normal-black-pearl-13px">
                              <span class="archivo-normal-black-pearl-13px"
                                >{{ $data->description }}</span
                              >
                              <span class="readmore">
                                <a href="{{ route('show_article',['id'=>$data->id]) }}" target="_blank">
                                  .... Read more 
                                </a>  
                              </span>
                            </p>
                            <div class="icone-article">
                              <div class="interation">
                                @if($data->u_urgent>0)
                                <img class="urgent" src="https://www.onlygfx.com/wp-content/uploads/2017/12/urgent-stamp-1.png" title="Already mark as urgent" alt="urgent" width="24" height="20" />
                                @else
                                <img class="urgent" id="u{{$data->id}}" src="{{ asset('public/img/urgent-74@2x.png') }}" alt="urgent" id='mark_urgent' onClick='mark_urgent("{{$data->id}}")' width="24" height="20" />
                                @endif
                                <div class="like">
                                
                                  @if($data->u_likes>0)
                                  <img class="vector" src="{{ asset('public/img/red-heart-icon.png') }}" alt="Vector" width="22" height="20" />
                                  @else
                                  <img class="vector" id="l{{$data->id}}" src="{{ asset('public/img/vector-87@2x.png') }}" alt="Vector" width="22" height="20" onClick='mark_like("{{$data->id}}")' />
                                  @endif
                                   <div class="number archivo-light-indigo-17px">
                                    <span class="archivo-light-indigo-17px">{{$data->t_likes}}</span>
                                  </div>
                                </div>
                                @if($data->u_read>0)
                                <img class="dj-lu" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/already-2836080-2353678.png" alt="dj lu" width="21" height="20" />
                                @else 
                                <img class="dj-lu" id="dj{{$data->id}}" src="{{ asset('public/img/d-j--lu-82@2x.png') }}" alt="dj lu" width="21" height="20" onClick='mark_read("{{$data->id}}")' />
                                @endif
                                
                                @if($data->u_unread>0)
                                <img class="a-lire-plus-tard" src="https://icons.iconarchive.com/icons/icons8/ios7/24/Programming-Show-Property-icon.png"
                                  alt="a lire plus tard" />
                                @else
                                <img class="a-lire-plus-tard" id="ptard{{$data->id}}" onClick='mark_unread("{{$data->id}}")' src="{{ asset('public/img/a-lire-plus-tard-82@2x.png') }}"
                                  alt="a lire plus tard" />
                                @endif
                              </div>
                              <img class="partage" src="{{ asset('public/img/partage-35@2x.png') }}" alt="Partage" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 @if($key%3==2)
                  </div>
                  @endif
                  @endforeach
                  @if (isset($key))
                    <div style="display:none;" id="testtest">{{$key}}</div>
                    @if($key%3 !=2)
                    </div>
                    @endif
                  @endif
              </div>
            </div>
          </div>
        </div>
        @include('footer')
      </div>
    </div>
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

var url_mark_argent    = "{{asset('/')}}mark_urgent/";
var url_mark_like      = "{{asset('/')}}mark_like/";
var url_mark_read      = "{{asset('/')}}mark_read/";
var url_mark_readlater = "{{asset('/')}}mark_readlater/";
var url_get_subcat     = "{{asset('/')}}get_subcat/";

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
              $("#l"+data.changed_id).attr("src","../public/img/red-heart-icon.png")
              alert('Article Mark as Like Success');
              //$("#id").html(commenthtml);
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
$(document).on('click','.recherche',function(e){
      $('#readlater_search').submit();
})
$(document).on('click','.save_search',function(e){
      //$('#readlater_search').submit();
})
$(document).on('click','.nwsltter',function(e){

      var  cid      = $('#catdd').val();
      var  scid     = $('#subcatdd').val();
      var  stsearch = $('#search_text').val();
      var  ssdays   = $('#dddd').val();
      var  sstags   = $('#tagsdd').val();
      
      if(stsearch ==""){

        $('#show_err').html("Search Text can not be left blank");
        setTimeout(function() { 
            $('#show_err').html();
        }, 2000);
        return false;
      }
      if(cid ==""){

        $('#show_err').html("Category can not be left blank");
        setTimeout(function() { 
            $('#show_err').html();
        }, 2000);
        return false;
      }
      if(scid ==""){
        $("#show_err").html("Sub Category can not be left blank");
        setTimeout(function() { 
            $('#show_err').html();
        }, 2000);
        return false;
      }
      if(ssdays ==""){
        $("#show_err").html("Days can not be left blank");
        setTimeout(function() { 
            $('#show_err').html();
        }, 2000);
        return false;
      }
      if(sstags ==""){
        $("#show_err").html("Tags can not be left blank");
        setTimeout(function() { 
            $('#show_err').html();
        }, 2000);
        return false;
      }

      $("#sscat").val(cid);
      $("#sssubcat").val(scid);
      $("#stsearch").val(stsearch);
      $("#ssdays").val(ssdays);
      $("#sstags").val(sstags);

      $('#create_newsletter').submit();
})

$(document).on('change','#catdd',function(e) {
       //console.log($(this).val());
       var cid=$(this).val();
       //console.log(url_get_subcat+cid);
       if(cid !=""){
         $.ajax({
         url: url_get_subcat+cid,
         method: "GET",
         success: function (data){
            //console.log('Success: ',data);
            //console.log(data.sub_cat_html);
            if(data.success){
              $("#subcatdd").html(data.sub_cat_html);  
            }
         },
         error: function (data) {
            console.log('Error: ', data);
         }
     });
    }   
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
</script>
<style type="text/css">
.btn-maroon, .btn-maroon:focus {
    background-color: #981b48 !important;
    border-color: #981b48;
    color: #fff;
}
</style>
