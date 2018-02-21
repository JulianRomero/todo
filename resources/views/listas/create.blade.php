@extends ('layout')

@section('content')

	<div class="jumbotron">
		<h1>Create a New List</h1>
		<hr />
		<form method="POST" action="/lists">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="exampleInputEmail1">List Name</label>
		    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter List Name" name="name">
		    <small id="emailHelp" class="form-text text-muted">This will be the list group for some todos.</small>
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>

@endsection	
