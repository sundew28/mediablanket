<!DOCTYPE html>
<html>
<head>
    <title>Media Blanket Leads</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors)
        <span class="invalid-feedback" role="alert">
            <strong>Something went wrong</strong>
        </span>
    @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Leads
    </div>
    <div class="card-body">
      <form name="leads-form" id="add-blog-post-form" method="post" action="{{url('leads-form-submit')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">First name</label>
          <input type="text" id="fname" name="fname" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
