 @extends('frontend.templates')
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('description') About boaz farm and investment platform steps on how to partner.
@endsection

 @section('title','about boaz farm')
 

<style type="text/css">
    .truncate {
    display: -webkit-box;
    max-width: 200px;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

 @section('content')

    <body>
        <!-- Top Bar Start -->
      @include('frontend.topbar')
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        @include('frontend.navbar')
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Detail Page</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Single Post Start-->
        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            <img src="{{url($edit->image)}}" />
                            <h2>{{$edit->title}}</h2>
                            <p>
                                {!! $edit->message !!}
                            </p>
                          
                        </div>
                        <div class="single-tags">
                            <a href="">National</a>
                            <a href="">International</a>
                            <a href="">Economics</a>
                            <a href="">Politics</a>
                            <a href="">Lifestyle</a>
                            <a href="">Technology</a>
                            <a href="">Trades</a>
                        </div>
                        <div class="single-related">
                            <h2>Related Post</h2>
                            <div class="owl-carousel related-slider">
                                @php
                                $recentpost = App\Models\Post::take(2)->get();
                                @endphp
                                @foreach($recentpost as $recentpost)
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="{{asset($recentpost->image)}}" />
                                    </div>
                                    <div class="post-text">
                                        <a href="">{{$recentpost->title}}</a>
                                        <div class="post-meta">
                                            <p>By<a href="">{{$recentpost->user->name}}</a></p>
                                            <p>In<a href="">{{$recentpost->category->name}} </a></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                                
                               
                            </div>
                        </div>

                        <div class="single-comment">
                                 @php
                                $allcomments = App\Models\Comment::where('post_id',$edit->id ?? '')->take(2)->get();
                                $commentcount = App\Models\Comment::where('post_id',$edit->id ?? '')->count();
                                @endphp

                            <h2>{{$commentcount}} Comments</h2>


                                @foreach($allcomments as $allcomments)
                            <ul class="comment-list">
                                <li class="comment-item">
                                    <div class="comment-body">
                                        <div class="comment-img">
                                            <img src="{{asset($allcomments->user->image)}}" />
                                        </div>
                                        <div class="comment-text">
                                            <h3><a href="">{{$allcomments->user->name}} </a></h3>
                                            <span>{{Carbon\Carbon::parse($allcomments->created_at)->format('d-m-y:h:m')}}</span>
                                            <p>
                                                {{$allcomments->message}}
                                            </p>
                                            <a class="btn" href="">Reply</a>
                                        </div>
                                    </div>
                                </li>
                             
                            </ul>
                            @endforeach
                        </div>
                        <div class="comment-form">


                             @if (count($errors) > 0)
                                    <div class="error">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            <h2>Leave a comment</h2>

                      
                  <form action="{{route('sendcomment')}}" method="post" enctype="multipart/form-data">

                                              @csrf

                                <div class="form-group">
                                    @if(Auth::check())
                                       <input type="hidden" class="form-control" id="name" name="name" value="{{Auth::user()->name ?? ''}}">
                                    @else
                                    <label for="name">Name *</label>
                                   
                                     <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name ?? ''}}">
                                    @endif
                                   
                                    <input type="hidden" class="form-control" id="post_id" name="post_id" value="{{$edit->id}}">
                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}">
                                </div>
                                 @if(Auth::check())
                                       <input type="hidden" class="form-control" id="email" name="email" value="{{Auth::user()->email ?? ''}}">
                                 @else
                                       <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email ?? ''}}">
                                </div>
                                 @endif
                             
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website"  name="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-custom">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="single-bio">
                                    <div class="single-bio-img">
                                        <img src="{{asset('img/user.jpg')}}" />
                                    </div>
                                    <div class="single-bio-text">
                                        <h3>Author Name</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                        </p>
                                    </div>
                                    <div class="single-bio-social">
                                        <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                        <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="search-widget">
                                    <form>
                                        <input class="form-control" type="text" placeholder="Search Keyword">
                                        <button class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Recent Post</h2>
                                <div class="recent-post">
                                @php
                                $recentpost2 = App\Models\Post::take(2)->get();
                                $commentcount = App\Models\Comment::count();
                                @endphp

                                @foreach($recentpost2 as $recentpost)
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{asset($recentpost->image)}}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">{{$recentpost->title}}</a>
                                            <div class="post-meta">
                                                <p>By<a href="">{{$recentpost->user->name}}</a></p>
                                                <p>In<a href=""> {{$recentpost->category->name}} </a></p>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                 @endforeach
                            </div>

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="{{asset('img/blog-1.jpg')}}" alt="Image"></a>
                                </div>
                            </div>
                            <br>

                         
                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="{{asset('img/blog-2.jpg')}}" alt="Image"></a>
                                </div>
                            </div>

                      <!--       <div class="sidebar-widget">
                                <h2 class="widget-title">Categories</h2>
                            
                            
                                <div class="category-widget">
                                    <ul>
                                        <li><a href=""> </a><span>(98)</span></li>
                                        <li><a href="">International</a><span>(87)</span></li>
                                        <li><a href="">Economics</a><span>(76)</span></li>
                                        <li><a href="">Politics</a><span>(65)</span></li>
                                        <li><a href="">Lifestyle</a><span>(54)</span></li>
                                        <li><a href="">Technology</a><span>(43)</span></li>
                                        <li><a href="">Trades</a><span>(32)</span></li>
                                    </ul>
                                </div>

                            </div>
 -->
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Post End-->   


        <!-- Footer Start -->
        @endsection()


        @section('script')


        @endsection
       
    </body>
</html>
