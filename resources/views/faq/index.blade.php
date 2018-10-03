@extends('layouts.home')
@section('content')

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-heading text-uppercase">{{$title}}</h2>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                User: What can I do if I Forget my password or username? can I be a vendor?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Yes it is possible for anyone to be a vendor as long as you provide relevant event services. Click here to register with us today.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                forget your password and username?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                        How can I delete my account?
                        -can I create a few account if I provide different services?
                        - After the free trail period or in future can I choose to unsubscribe?
                        </div>
                    </div>
                </div>                    
            </div>
            <p class="text-info">For further enquiries, email us!</p>
        </div>
    </div>
</div>
</section>      
@endsection