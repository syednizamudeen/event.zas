@extends('layouts.home')
@section('content')
  <link rel="stylesheet" href="{{asset('css/blog.css')}}">
  <section class="bg-light" id="team">
  <div class="container">
      <div class="row">
          <!-- Latest Posts -->
          <main class="posts-listing col-lg-8"> 
          <div class="container">
              <div class="row">
                    @foreach($posts as $post)
                        <div class="post col-xl-6">
                            <div class="post-thumbnail"></div>
                            <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                            </div><a href="{{url('/post/').'/'.$post->slug}}">
                            <h3 class="h4">{{$post->name}}</h3></a>
                            <p class="text-muted">{{str_limit(strip_tags($post->body),125,'...')}}</p>
                            <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar"><img src="{{asset('app/img/team/2.jpg')}}" alt="..." class="img-fluid"></div>
                                <div class="title"><span>{{$post->user->name}}</span></div></a>
                                <div class="date"><i class="fas fa-clock"></i> {{$post->created_at->diffForHumans()}}</div>
                                <div class="comments meta-last"><i class="fas fa-comment"></i>12</div>
                            </div>
                            </div>
                        </div>
                    @endforeach
              </div>
              {{$posts->links()}}  
              {{-- <nav aria-label="Page navigation example">                       
                    <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-circle-left fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#" tabindex="-1">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-circle-right fa-lg" aria-hidden="true"></i></a>
                        </li>
                    </ul>
              </nav> --}}
          </div>
          </main>
          @include('blog.partials.right')
      </div>
  </div>
    {{-- <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
            <div class="team-member">
            <img class="mx-auto rounded-circle" src="{{asset('app/img/team/1.jpg')}}" alt="">
            <h4>Kay Garland</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-member">
            <img class="mx-auto rounded-circle" src="{{asset('app/img/team/2.jpg')}}" alt="">
            <h4>Larry Parker</h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="team-member">
            <img class="mx-auto rounded-circle" src="{{asset('app/img/team/3.jpg')}}" alt="">
            <h4>Diana Pertersen</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p> --}}
        </div>
        </div>
    </div>
    </section>

@endsection