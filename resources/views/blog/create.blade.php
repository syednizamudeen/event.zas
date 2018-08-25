@extends('layouts.home')
@section('content')
  <link rel="stylesheet" href="{{asset('css/blog.css')}}">
  <section class="bg-light" id="team">
  <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-12"> 
            <div class="container">
            <h3 class="box-title">{{$title}}</h3>            
            <div class="post-single">
                <div class="post-thumbnail"></div>
                <div class="post-details">
                    <div class="post-meta d-flex justify-content-between">
                        <div class="category"></div>
                    </div>
                    {!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name','Title')}}
                            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                        </div>
                        <div class="post-body">
                            <div class="form-group">
                                {{Form::label('body','Body')}}
                                {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Enter Text'])}}
                            </div>
                        </div>
                        {{ csrf_field() }}
                        {{ Form::button('<i class="fas fa-save fa-lg fa-fw"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary float-right ml-3'] )  }}<a href="{{url('/blog')}}" class="btn btn-info float-right"><i class="fa fa-undo fa-fw"></i>Go Back</a>
                    {!! Form::close() !!}                    
                </div>
            </div>
            </div>
        </main>
      </div>
  </div>    
        </div>
        </div>
    </div>
    </section>
<script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>	
<script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat link image',
        images_upload_url: 'postAcceptor.php',
        images_upload_handler: function (blobInfo, success, failure) {
            setTimeout(function() {
            // no matter what you upload, we will turn it into TinyMCE logo :)
            success('http://moxiecode.cachefly.net/tinymce/v9/images/logo.png');
            }, 2000);
        }
    });
</script>
@endsection