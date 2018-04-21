@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="callout callout-danger">
        <h4>Error!</h4>
        <p>{{$error}}</p>
    </div>
    @endforeach
@endif

@if(session('success'))
<div class="callout callout-success">
    <h4>Success!</h4>
    <p>{{session('success')}}</p>
</div>
@endif

@if(session('error'))
<div class="callout callout-danger">
    <h4>Success!</h4>
    <p>{{session('error')}}</p>
</div>
@endif