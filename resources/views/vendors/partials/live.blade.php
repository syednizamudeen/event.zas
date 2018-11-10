<div class="row">
    @foreach($vendors as $vendor)
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-team">
            <div class="team-thumb" style="background-image: url({{asset('main/images/img-1.jpg')}})">
                <h6>
                    <span class="badge badge-success float-right m-3">
                        EventZAS Pay <span class="fa-stack">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fas fa-dollar-sign fa-stack-1x fa-inverse"></i>
                        </span>
                    </span>
                </h6>
                <div class="team-social">
                    <a target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a target="_blank" href="#" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
                    <a target="_blank" href="#" title="Instagram"><i class="fab fa-instagram  fa-lg"></i></a>
                </div>
            </div>
            <div class="team-content">
                <h4>{{$vendor->user->name}}</h4>
                <span class="clearfix">
                    @foreach($vendor->vendorservice as $service)
                    {{$service->service->name}}, 
                    @endforeach
                </span>
                <span class="clearfix">{{$vendor->country->name}}</span>
                <a href="#" class="text-warning"><i class="fas fa-comments fa-fw"></i>(0) reviews</a> | 
                <a href="profile.html" class="text-success"><i class="fas fa-folder-open fa-fw"></i>Show Profile</a>
                <button class="button"><i class="fas fa-dollar-sign fa-fw"></i>Ask for Quote</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-lg-6">
        <p class="lead">Showing {{$vendors->firstItem()}} to {{$vendors->lastItem()}} of {{$vendors->total()}} records</p>
    </div>
    <div class="col-lg-6">                            
        <nav aria-label="Pagination alignment">
            {{$vendors->links("pagination::bootstrap-4")}}
        </nav>
    </div>
</div>