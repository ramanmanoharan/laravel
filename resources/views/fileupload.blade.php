@include('header')

        <section class="page-header">
            <div class="container">
                <h2>File Upload</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><span>File Upload</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

<div class="container">
<center><button class="btn btn-primary"><a style="color:white" href="viewall">View All Data</a></button></center>
    <center><h1>File Upload</h1></center>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
            @endif
        <form method="post" action="fileupload" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="Title">
  </div>
  <div class="form-group">

    <label class="form-check-label" for="exampleCheck1">Description</label>
    <textarea rows="5" class="form-control" name="description"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">File Upload</label>
    <input type="file"  name="image_name" id="exampleInputPassword1" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<br><br>
</div>

@include('footer')