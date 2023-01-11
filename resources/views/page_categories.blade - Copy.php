<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--<meta name=description content="This site was generated with Anima. www.animaapp.com"/>-->
    <!-- <link rel="shortcut icon" type=image/.png') }} href="https://animaproject.s3.amazonaws.com/home/favicon.png') }}" /> -->
    <meta name="viewport" content="width=1922, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/.png') }}" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/page-categories.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/styleguide.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/globals.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

  </head>
  <body style="margin: 0; background: #ffffff">
    <input type="hidden" id="anPageName" name="page" value="page-categories" />
    <div class="container-center-horizontal">
      <div class="page-categories screen">
        <div class="page">
          <div class="sidebar-dtaille">
            <div class="sidebar">
              <div class="overlap-group-3">
                <div class="sidebar-bg"></div>
                <div class="component-1">
                  <img class="rectangle-1170" src="{{ asset('public/img/rectangle-1170-13@2x.png') }}" alt="Rectangle 1170" />
                  <p class="x21092022-actualit archivo-medium-thistle-green-20px">
                    <span class="archivo-medium-thistle-green-20px">{{date('d/m/Y')}}<br /></span
                    ><span class="archivo-light-thistle-green-10px"><br /></span
                    ><span class="archivo-light-thistle-green-15px">Actualités du 1/09/2022 au 16/09/2022</span>
                  </p>
                  <img class="collapse" src="{{ asset('public/img/collapse-13@2x.png') }}" alt="Collapse" />
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
                  
                  <div class="catgories-dtails">
                    <a href="{{ asset('/categories') }}">
                    <div class="projects">
                      <img class="apps-1" src="{{ asset('public/img/apps-1-11@2x.png') }}" alt="apps 1" />
                      <div class="catgories-2 valign-text-middle archivo-bold-scarlet-gum-16px">
                        <span><span class="archivo-bold-scarlet-gum-16px">Catégories</span> </span>
                      </div>
                    </div>
                    </a>
                    
                    <div class="frame-1-1">


                       @php
                        $categories=App\Models\Categories::orderBy('id', 'ASC')->get(["name", "id"]);
                       @endphp
                       @foreach ($categories as $data)
                        <button class="accordion">{{$data->name}}</button>
                       @php
                       
                       $subcategories=App\Models\SubCategory::where('cat_id',$data->id)->get();
                       
                       @endphp
                       <div class="panel">
                        <ul>
                       @foreach ($subcategories as $data2)
                           <li style="list-style: circle;height:auto;">
                             <a href="{{ route('show_all_sub_category',['id'=>$data2->id]) }}">{{$data2->name}}</a>
                           </li>
                       @endforeach
                     </ul>
                       </div>
                      
                      @endforeach  
                   </div>
                 </div>
                  <a href="{{ asset('/urgents') }}">
                  <div class="urgent-cab">
                    <img class="sitemap-1" src="{{ asset('public/img/sitemap-1-3@2x.png') }}" alt="sitemap 1" />
                    <div class="urgent-cab-1 valign-text-middle archivo-normal-pale-sky-16px">
                      <span><span class="archivo-normal-pale-sky-16px">Urgent Cab</span> </span>
                    </div>
                  </div>
                  </a>
                  <a href="{{ asset('/jaime') }}">
                  <div class="liker">
                    <img class="sitemap-1-1" src="{{ asset('public/img/sitemap-1-4@2x.png') }}" alt="sitemap 1" />
                    <div class="jaime valign-text-middle archivo-normal-pale-sky-16px">
                      <span><span class="archivo-normal-pale-sky-16px">J’aime</span> </span>
                    </div>
                  </div>
                  </a>
                 <a href="{{ asset('/je_lis_plus_tard') }}">
                  <div class="je-lis-plus-tard">
                    <div class="sitemap-1-2">
                      <img class="iconbookshelf" src="{{ asset('public/img/icon-bookshelf-1@2x.png') }}" alt="icon/bookshelf" />
                    </div>
                    <div class="je-lis-plus-tard-1 valign-text-middle archivo-normal-pale-sky-16px">
                      <span><span class="archivo-normal-pale-sky-16px">Je lis plus tard</span> </span>
                    </div>
                  </div>
                 </a>
                 <a href="{{ asset('/j_ai_deja_lu') }}">
                  <div class="dj-vu">
                    <img class="sitemap" src="{{ asset('public/img/sitemap-1-1@2x.png') }}" alt="sitemap 1" />
                    <div class="jai-dj-lu valign-text-middle archivo-normal-pale-sky-16px">
                      <span><span class="archivo-normal-pale-sky-16px">J&#39;ai déjà lu</span> </span>
                    </div>
                  </div>
                  </a>
                  <a href="{{ asset('/mes-recherches') }}">
                  <div class="dj-vu">
                    <img class="sitemap" src="{{ asset('public/img/sitemap-2-4@2x.png') }}" alt="sitemap 2" />
                    <div class="mes-recherches valign-text-middle archivo-normal-pale-sky-16px">
                      <span><span class="archivo-normal-pale-sky-16px">Mes recherches</span> </span>
                    </div>
                  </div>
                  </a>
                 <a href="{{ asset('/newsletter') }}">
                  <div class="newsletter">
                    <img class="sitemap-1-3" src="{{ asset('public/img/sitemap-1-2@2x.png') }}" alt="sitemap 1" />
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
                <img class="line-1" src="{{ asset('public/img/line-1-16@2x.png') }}" alt="Line 1" />
              </div>
            </div>
          </div>
          <div class="contenue">
            @include('header')
        
            <div class="frame-1254">
              <div class="section-recherche">
                <div class="recherche-section">
                  <div class="overlap-group-4">
                    <div class="que-recherchez-vous roboto-medium-scarlet-gum-24px">
                      <span class="roboto-medium-scarlet-gum-24px">Que recherchez-vous&nbsp;&nbsp;?</span>
                    </div>
                    <img class="bxbx-help-circle" src="{{ asset('public/img/bx-bx-help-circle-5@2x.png') }}" alt="bx:bx-help-circle" />
                  </div>
                  <form action="{{asset('/')}}search_article" method="POST" name="search_article" id="search_article">
                    @csrf
                   <div class="barre-de-recherche">
                    <img class="bxsearch-alt" src="{{ asset('public/img/bx-search-alt-7@2x.png') }}" alt="bx:search-alt" />
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
                            @foreach($subcategory as $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                            @endforeach
                           </select> 
                           </span>
                        </span>
                      </div>
                    </div>
                    <div class="box">
                      <div class="date-1">
                        <img class="calendar52" src="{{ asset('public/img/calendar52-1@2x.png') }}" alt="calendar52" />
                        <div class="priode valign-text-middle roboto-normal-mountain-mist-14px">
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
                    <div class="box-1">
                      <div class="badge-tag valign-text-middle roboto-normal-mountain-mist-14px">
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
                    <div class="call-to-action">
                      <div class="pesquisar valign-text-middle roboto-bold-white-16px">
                        <span>
                          <span class="roboto-bold-white-16px recherche" style="cursor:pointer;">
                           Recherche
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <div class="cartes-prsentant-les-articles">

                  <!-- <div class="frame-117" > -->
              @if($articles->count() > 0)    
                @foreach ($articles as $key =>$data)
                  @if($key%3==0)
                  <div class="frame-117" >
                  @endif
                  <div class="article-rcent-carte" {{$key}}>
                    <div class="overlap-group">
                      <div class="titre-et-date">
                        <div class="lorem-ipsum-dolor-sit valign-text-middle archivo-semi-bold-black-17px">
                          <span>
                            <span class="archivo-semi-bold-black-17px">
                              {{$data->title}}                            
                            </span> 
                          </span>
                        </div>
                        <div class="date valign-text-middle archivo-normal-black-13px">
                          <span><span class="archivo-normal-black-13px">{{ $data->created_at }}</span> </span>
                        </div>
                      </div>
                      <div class="overlap-group-1">
                        <img class="logo" src="{{ asset('public/img/logo-34@2x.png') }}" alt="logo" />
                        <div class="frame-1291">
                          <div class="catgories">
                            <div class="badge-catgorie">
                              <div class="overlap-group-2">
                                <div class="rectangle-1171"></div>
                                <div class="catgories-1 valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">
                                    @if(isset($data->article_cat->name))
                                     {{ $data->article_cat->name }}
                                    @else
                                      {{ $data->categoryname }}
                                    @endif   
                                  </span> </span>
                                </div>
                              </div>
                              <div class="overlap-group1">
                                <div class="rectangle-1171-1"></div>
                                <div class="sous-catgorie valign-text-middle archivo-medium-white-16px">
                                  <span><span class="archivo-medium-white-16px">
                                    @if(isset($data->article_subcat->name))
                                     {{ $data->article_subcat->name }}
                                    @else
                                      {{ $data->subcategoryname }}
                                    @endif   

                                  </span> </span>
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
                              <span class="archivo-normal-black-pearl-13px">
                                {{ $data->description }}
                                </span>
                                <span class="readmore">
                                  <a href="{{ route('show_article',['id'=>$data->id]) }}" target="_blank">
                                    .... Read more 
                                  </a>  
                                </span>
                            </p>
                            <div class="icone-article">
                              <div class="interation">
                            <!--     
                                @if(count($data->urgent)>0)
                                <h1>{{count($data->urgent)}}</h1>
                                @else
                                <h1>0</h1>
                                @endif
                                @php
                                 $a ='n';
                                @endphp
                                @foreach($data->urgent as $urgent)
                                  @if($urgent->article_urgent->id == Session::get('id'))
                                   @php
                                    $a ='y';
                                    @endphp
                                   @endif
                                @endforeach -->
                                @if($u_urgent>0)
                                <img class="urgent" src="https://www.onlygfx.com/wp-content/uploads/2017/12/urgent-stamp-1.png" title="Already mark as urgent" alt="urgent" width="24" height="20" />
                                @else
                                <img class="urgent" id="u{{$data->id}}" src="{{ asset('public/img/urgent-74@2x.png') }}" alt="urgent" id='mark_urgent' onClick='mark_urgent("{{$data->id}}")' width="24" height="20" />
                                @endif
                                <div class="like">
                                <!--   @if(count($data->like)>0)
                                  <h1>{{count($data->like)}}</h1>
                                  @else
                                  <h1>0</h1>
                                  @endif
                                  @php
                                   $a ='n';
                                  @endphp
                                  @foreach($data->like as $like)
                                    @if($like->article_like->id == Session::get('id'))
                                     @php
                                      $a ='y';
                                      @endphp
                                     @endif
                                  @endforeach -->
                                  @if(u_likes>0)
                                  <img class="vector" src="{{ asset('public/img/red-heart-icon.png') }}" alt="Vector" width="22" height="20" />
                                  @else
                                  <img class="vector" id="l{{$data->id}}" src="{{ asset('public/img/vector-87@2x.png') }}" alt="Vector" width="22" height="20" onClick='mark_like("{{$data->id}}")' />
                                  @endif
                                   <div class="number archivo-light-indigo-17px">
                                    <span class="archivo-light-indigo-17px">{{count($data->like)}}</span>
                                  </div>
                                </div>
                        <!--          @foreach($data->read as $read)
                                    @if($read->article_read->id == Session::get('id'))
                                     @php
                                      $a ='y';
                                      @endphp
                                     @endif
                                 @endforeach -->
                                @if($u_read>0)
                                <img class="dj-lu" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/already-2836080-2353678.png" alt="dj lu" width="21" height="20" />
                                @else 
                                <img class="dj-lu" id="dj{{$data->id}}" src="{{ asset('public/img/d-j--lu-82@2x.png') }}" alt="dj lu" width="21" height="20" onClick='mark_read("{{$data->id}}")' />
                                @endif
                                <!-- @if(count($data->read)>0)
                                  <h1>{{count($data->read)}}</h1>
                                  @else
                                  <h1>0</h1>
                                @endif  
                                @foreach($data->unread as $unread)
                                    @if($unread->article_unread->id == Session::get('id'))
                                     @php
                                      $a ='y';
                                      @endphp
                                     @endif
                                 @endforeach -->
                                @if($u_unread>0)
                                <img class="a-lire-plus-tard" src="https://icons.iconarchive.com/icons/icons8/ios7/24/Programming-Show-Property-icon.png"
                                  alt="a lire plus tard" />
                                @else
                                <img class="a-lire-plus-tard" id="ptard{{$data->id}}" onClick='mark_unread("{{$data->id}}")' src="{{ asset('public/img/a-lire-plus-tard-82@2x.png') }}"
                                  alt="a lire plus tard" />
                                @endif
                               <!--  @if(count($data->unread)>0)
                                  <h1>{{count($data->unread)}}</h1>
                                  @else
                                  <h1>0</h1>
                                @endif   -->  
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
                  @if(isset($key))
                    <div style="display:none;" id="testtest">{{$key}}</div>
                    @if($key%3 !=2)
                    </div>
                    @endif
                  @endif
                {{ $articles->links() }}
                </div>
                @else
                <div class="frame-117" >
                  <div class="article-rcent-carte">
                    <div class="overlap-group">
                     <!-- <div>No article found</div> -->
                     <div class="titre-et-date">
                        <div class="lorem-ipsum-dolor-sit valign-text-middle archivo-semi-bold-black-17px">
                          <span><span class="archivo-semi-bold-black-17px">No article found</span> </span>
                        </div>
                        <div class="date valign-text-middle archivo-normal-black-13px">
                          <span><span class="archivo-normal-black-13px">&nbsp;</span> </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>      
                @endif
              </div>
            </div>
          </div>
         @include('footer')
        </div>
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
      $('#search_article').submit();
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
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  /*background-color: white;*/
  overflow: hidden;
}
.btn-maroon, .btn-maroon:focus {
    background-color: #981b48 !important;
    border-color: #981b48;
    color: #fff;
}
</style>