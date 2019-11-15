
@include('inc.header');

<div class="container pb-5">
  <h1>Create Data</h1>
  <div class="row">
     <div class="col-md-8">
     <form method="POST" action="{{url('/insert')}}">
    {{csrf_field()}}

  @if(count($errors) > 0)
    @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
    @endforeach
  @endif

  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" class="form-control" name="description" id="description" placeholder="Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{url('/')}}" class="btn btn-primary">Back</a>
</form>

  </div>

  </div>
 
  
</div>


@include('inc.footer');