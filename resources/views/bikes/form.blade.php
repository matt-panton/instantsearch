{{ csrf_field() }}

<div class="form-group {{ $errors->has('manufacturer_id') ? 'has-error' : '' }}">
	<label for="manufacturer_id">Manufacturer</label>
	<select name="manufacturer_id" id="manufacturer_id" class="form-control">
		<option value="" disabled selected>Select manufacturer</option>
		@foreach($manufacturers as $manufacturer)
			<option value="{{ $manufacturer->id }}" @if(old('manufacturer_id', $bike->manufacturer_id) == $manufacturer->id) selected @endif>
				{{ $manufacturer->name }}
			</option>
		@endforeach
	</select>
	{!! $errors->first('manufacturer_id', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" class="form-control" value="{{ old('name', $bike->name) }}">
	{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
	<label for="price">Price</label>
	<input type="text" name="price" id="price" class="form-control" value="{{ old('price', $bike->price) }}">
	{!! $errors->first('price', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('suspension') ? 'has-error' : '' }}">
	<label for="suspension">Suspension</label>
	<select name="suspension" id="suspension" class="form-control">
		<option value="full" @if(old('suspension', $bike->suspension) == 'full') selected @endif>Full suspension</option>
		<option value="hardtail" @if(old('suspension', $bike->suspension) == 'hardtail') selected @endif>Hardtail</option>
	</select>
	{!! $errors->first('suspension', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
	<label for="year">Year</label>
	<input type="text" name="year" id="year" class="form-control" value="{{ old('year', $bike->year) }}">
	{!! $errors->first('year', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	<div>
		<label>Disciplines</label>
	</div>
	@foreach($disciplines as $discipline)
		<label>{{ $discipline->name }}
			<input
				type="checkbox"
				name="disciplines[]"
				value="{{ $discipline->id }}"
				@if( in_array($discipline->id, old('disciplines', $bike->disciplines->pluck('id')->all())) )checked @endif
			>
		</label> &nbsp;&nbsp; 
	@endforeach
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
	<label for="description">Description</label>
	<textarea name="description" id="description" class="form-control" rows="6">{{ old('description', $bike->description) }}</textarea>
	{!! $errors->first('description', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	<button class="btn btn-success btn-block">Submit</button>
</div>