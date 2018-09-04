@extends('layouts.home')
@section('content')
  <link rel="stylesheet" href="{{asset('css/blog.css')}}">
  <section class="bg-light" id="team">
  <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
            <div class="container">
            <h3 class="box-title">{{$title}}</h3>
            <div class="post-single">
                <div class="post-thumbnail"></div>
                <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                    <div class="category"></div>
                </div>
                <h1>{{$blog->name}}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                    <div class="author d-flex align-items-center flex-wrap">
                        <div class="avatar">
                            <img src="{{asset('app/img/team/2.jpg')}}" alt="..." class="img-fluid">
                        </div>
                        <div class="title">
                            <span>{{$blog->user->name}}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap"> 
                        @if (!Auth::guest())
                        @hasanyrole('super-admin|vendor')
                        <a href="{{url('/blog/'.$blog->id.'/edit')}}"><div class="edit"><i class="fas fa-edit"></i>Edit</div></a>
                        @endrole
                        @endif
                        <div class="date"><i class="fas fa-clock"></i> {{$blog->created_at->diffForHumans()}}</div>
                        <div class="views"><i class="fas fa-eye"></i> 500</div>
                        <div class="comments meta-last"><i class="fas fa-comment"></i>12</div>
                    </div>
                </div>
                <div class="post-body">
                    {!!$blog->body!!}                    
                </div>
                <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                    <div class="text"><strong class="text-primary">Previous Post </strong>
                        <h6>I Bought a Wedding Dress.</h6>
                    </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Next Post </strong>
                        <h6>I Bought a Wedding Dress.</h6>
                    </div>
                    <div class="icon next"><i class="fa fa-angle-right">   </i></div></a>
                </div>
                <div class="post-comments">
                    <header>
                    <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3>
                    </header>
                    <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                        <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{asset('app/img/team/1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>Jabi Hernandiz</strong><span class="date">May 2016</span></div>
                        </div>
                    </div>
                    <div class="comment-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    </div>
                    <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                        <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{asset('app/img/team/1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>Nikolas</strong><span class="date">May 2016</span></div>
                        </div>
                    </div>
                    <div class="comment-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    </div>
                    <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                        <div class="user d-flex align-items-center">
                        <div class="image"><img src="{{asset('app/img/team/1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title"><strong>John Doe</strong><span class="date">May 2016</span></div>
                        </div>
                    </div>
                    <div class="comment-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    </div>
                </div>
                <div class="add-comment">
                    <header>
                    <h3 class="h6">Leave a reply</h3>
                    </header>
                    <form action="#" class="commenting-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                        <input type="text" name="username" id="username" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <input type="email" name="username" id="useremail" placeholder="Email Address (will not be published)" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                        <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-secondary">Submit Comment</button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </main>
          @include('blog.partials.right')
      </div>
  </div>    
        </div>
        </div>
    </div>
</section>
<script>
    $('.post-body img').each(function(){
        $(this).addClass('img-fluid');
    });
</script>
@endsection