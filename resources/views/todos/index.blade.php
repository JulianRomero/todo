@extends ('layout')

@section('content')

	<div class="jumbotron">

		<h1>TODOs</h1>
		<ul class="list-group">
			@foreach($todos as $todo)
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<a href="todos/{{$todo->id}}">{{ $todo->title }}</a>
					<span class="badge badge-primary badge-pill">0</span>
				</li>
			@endforeach
		</ul>
	</div>

@endsection