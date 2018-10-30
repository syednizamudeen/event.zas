@if(isset($errors) && count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="py-5 mt-5">
                    <div class="alert alert-danger" role="alert">
                        <h4><i class="fas fa-ban fa-lg fa-fw"></i>Alert!</h4>
                        <hr>
                        <p class="lead">{{$error}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    @endforeach
@endif

@if(session('success'))
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="py-5 mt-5">
                <div class="alert alert-success" role="alert">
                    <h4><i class="fas fa-check fa-lg fa-fw"></i>Success!</h4>
                    <hr>
                    <p class="lead">{{session('success')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(session('error'))
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="py-5 mt-5">
                <div class="alert alert-danger" role="alert">
                    <h4><i class="fas fa-ban fa-lg fa-fw"></i>Alert!</h4>
                    <hr>
                    <p class="lead">{{session('error')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (session('status'))
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="py-5 mt-5">
                <div class="alert alert-primary" role="alert">
                    <h4><i class="fas fa-info-circle fa-lg fa-fw"></i>Info!</h4>
                    <hr>
                    <p class="lead">{{ session('status') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (session('warning'))
<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="py-5 mt-5">
                <div class="alert alert-warning" role="alert">
                    <h4><i class="fas fa-exclamation-triangle fa-lg fa-fw"></i>Warning!</h4>
                    <hr>
                    <p class="lead">{{ session('warning') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endif