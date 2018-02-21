@extends ('layout')

@section('content')

	<div class="jumbotron">

		<h1>{{ $lista->name }} TODOs</h1>
		@foreach($lista->todos as $todo)
			<li class="list-group-item d-flex justify-content-between align-items-center">
				<a href="/todos/{{$todo->id}}">{{ $todo->title }}</a>
				
			</li>
		@endforeach

	</div>

@endsection	