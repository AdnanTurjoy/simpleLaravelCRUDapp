@include('inc.header')
<div class="container">
	<div class="row">
		<legend>LARAVEL CRUD</legend>
		<p class="lead">{{$articles->title}}</p>
		</div>
			<div class="row">

		<p class="lead">{{$articles->description}}</p>
			</div>

	
</div>
@include('inc.footer')