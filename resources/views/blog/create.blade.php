@extends('layouts.home')
@section('content')
  <link rel="stylesheet" href="{{asset('css/blog.css')}}">
  <section class="bg-light" id="team">
  <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
            <div class="container">
            <div class="post-single">
                <div class="post-thumbnail"></div>
                <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                    <div class="category"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Text">
                </div>
                <div class="post-body">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
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