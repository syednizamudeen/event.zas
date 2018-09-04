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
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', "{{ url('/blog/postimage') }}");
            var token = '{{ csrf_token() }}';
            xhr.setRequestHeader("X-CSRF-Token", token);
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            xhr.send(formData);
        },
        relative_urls: false,
        remove_script_host: false,
        convert_urls: true,
    });
</script>
@endsection