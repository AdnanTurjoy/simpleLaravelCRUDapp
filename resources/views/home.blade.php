
@include('inc.header');
<div class="container">
  <div class="row">
    <legend>LARAVEL CRUD APP</legend>
    @if(session('info'))
        <div class="alert alert-success">
             {{session('info')}}

        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr class="bg-primary">
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @if(count($articles) > 0)
          @foreach($articles->all() as $article)


        <tr>
          <th scope="row">{{$article->id}}</th>
          <td>{{$article->title}}</td>
          <td>{{$article->description}}</td>
          <td>
            <a href='{{ url("/read/{$article->id}") }}' ><button type="button" class="btn btn-primary btn-sm">Read</button></a>
            <a href='{{ url("/update/{$article->id}") }}' ><button type="button" class="btn btn-success btn-sm">Update</button></a>
            <a href='{{ url("/delete/{$article->id}") }}' ><button type="button" class="btn btn-danger btn-sm">Delete</button></a>


          </td>
        </tr>

        @endforeach
      @endif


      </tbody>
    </table>
  </div>
</div>



@include('inc.footer');