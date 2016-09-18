@extends('layouts.app')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3>Edit bike</h3>
			<br>
			
			<form action="{{ route('bikes.store') }}" method="POST">
				{{ method_field('PATCH') }}
				@include('bikes.form')
			</form>
		</div>
	</div>
</div>
@endsection