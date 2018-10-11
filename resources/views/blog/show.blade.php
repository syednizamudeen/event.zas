@extends('layouts.home')
@section('content')
<link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/comment.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/form.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/button.min.css" rel="stylesheet">
<link href="{{ asset('/vendor/laravelLikeComment/css/style.css') }}" rel="stylesheet">
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
                        <div class="date"><i class="fas fa-clock"></i> {{$blog->created_at->diffForHumans()}}</div>
                        <div class="views"><i class="fas fa-eye"></i> 500</div>
                        <div class="comments meta-last"><i class="fas fa-comment"></i>12</div>
                        &nbsp;&nbsp;&nbsp;
                        @if (!Auth::guest())
                        @hasanyrole('super-admin|vendor')
                        <a href="{{url('/blog/'.$blog->id.'/edit')}}"><div class="edit"><i class="fas fa-edit"></i>Edit</div></a>
                        {!! Form::open(['action' => ['BlogsController@destroy', $blog->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{ Form::button('<i class="fas fa-trash"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-xs btn-light'] )  }}
                        {!! Form::close() !!}
                        @endrole
                        @endif
                    </div>
                </div>
                <div class="post-body">
                    {!!$blog->body!!}                    
                    @foreach($blog->tags as $tag)
                        <span class="badge badge-primary">{{$tag->name}}</span>
                    @endforeach
                </div>
                {{-- <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                    <div class="text"><strong class="text-primary">Previous Post </strong>
                        <h6>I Bought a Wedding Dress.</h6>
                    </div></a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Next Post </strong>
                        <h6>I Bought a Wedding Dress.</h6>
                    </div>
                    <div class="icon next"><i class="fa fa-angle-right">   </i></div></a>
                </div> --}}
                @include('laravelLikeComment::comment', ['comment_item_id' => 'blog_'.$blog->id])
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    var APP_URL = {!! json_encode(url('/')) !!}
    $('.post-body img').each(function(){
        $(this).addClass('img-fluid');
    });
</script>
<script src="{{ asset('/vendor/laravelLikeComment/js/script.js') }}" type="text/javascript"></script>
@endsection