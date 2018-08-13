@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <section>
        <div class="container p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-danger">
                        <h4>Error!</h4>
                        <p>{{$error}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    @endforeach
@endif

@if(session('success'))
<section>
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-success">
                    <h4>Success!</h4>
                    <p>{{session('success')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(session('error'))
<section>
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-danger">
                    <h4>Success!</h4>
                    <p>{{session('error')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if (session('status'))
<section>
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if (session('warning'))
<section>
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            </div>
        </div>
    </div>
</section>
@endif