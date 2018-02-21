@extends ('layout')

@section('content')

	<div class="jumbotron">

		<h1>Lists</h1>
		<ul class="list-group">
		@foreach($listas as $lista)
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href="lists/{{$lista->id}}">{{ $lista->name }}</a>
				<span class="badge badge-primary badge-pill">{{$lista->sum()}}</span>
			</li>
		@endforeach
		</ul>
		<hr />
		<a href="/lists/create" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Add List</a>
	</div>

@endsection