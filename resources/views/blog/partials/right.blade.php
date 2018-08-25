<aside class="col-lg-4">
@if (!Auth::guest())
<a href="{{url('/blog/create')}}" class="btn btn-warning btn-lg btn-block mb-3"><i class="fas fa-edit fa-lg fa-fw"></i>Create Post</a>
@endif
<!-- Widget [Search Bar Widget]-->
<div class="widget search">
    <header>
    <h3 class="h6">Search the blog</h3>
    </header>
    <form action="#" class="search-form">
    <div class="form-group">
        <input type="search" placeholder="What are you looking for?">
        <button type="submit" class="submit"><i class="fas fa-search"></i></button>
    </div>
    </form>
</div>
<!-- Widget [Latest Posts Widget]        -->
<div class="widget latest-posts">
    <header>
    <h3 class="h6">Latest Posts</h3>
    </header>
    <div class="blog-posts"><a href="#">
        <div class="item d-flex align-items-center">
        <div class="image"><img src="{{asset('app/img/team/1.jpg')}}" alt="..." class="img-fluid"></div>
        <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
            <div class="d-flex align-items-center">
            <div class="views"><i class="fas fa-eye"></i> 500</div>
            <div class="comments"><i class="fas fa-comment"></i>12</div>
            </div>
        </div>
        </div></a><a href="#">
        <div class="item d-flex align-items-center">
        <div class="image"><img src="{{asset('app/img/team/2.jpg')}}" alt="..." class="img-fluid"></div>
        <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
            <div class="d-flex align-items-center">
            <div class="views"><i class="fas fa-eye"></i> 500</div>
            <div class="comments"><i class="fas fa-comment"></i>12</div>
            </div>
        </div>
        </div></a><a href="#">
        <div class="item d-flex align-items-center">
        <div class="image"><img src="{{asset('app/img/team/3.jpg')}}" alt="..." class="img-fluid"></div>
        <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
            <div class="d-flex align-items-center">
            <div class="views"><i class="fas fa-eye"></i> 500</div>
            <div class="comments"><i class="fas fa-comment"></i>12</div>
            </div>
        </div>
        </div></a></div>
</div>
<!-- Widget [Categories Widget]-->
<div class="widget categories">
    <header>
    <h3 class="h6">Categories</h3>
    </header>
    <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
    <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
    <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
    <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
    <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
</div>
</aside>