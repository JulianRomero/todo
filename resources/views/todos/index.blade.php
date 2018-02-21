<h1>TO DOs</h1>
@foreach($todos as $todo)
	<li>
		<a href="todos/{{$todo->id}}">{{ $todo->title }}</a>
	</li>
@endforeach