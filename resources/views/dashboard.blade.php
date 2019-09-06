@extends('layouts.header')

@section('content')

	<h1>{{$title}}</h1>
	
	@if(count($dash) > 0)

		<ul class="list-group">
			@foreach($dash as $D)
				<li class="list-group-item">{{$D}}</li>
			@endforeach
		</ul>
		
	@endif

@endsection