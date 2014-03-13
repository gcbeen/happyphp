@if($errors = Session::get('errors'))
	<div class="alert alert-error">
	{{ trans('messages.error_messages', [ 'count' => count($errors->all()) ]) }}
    <ul>
	@foreach($errors->all() as $key => $value)
	<li>{{ $value }}</li>
    @endforeach
    </ul>
  </div>
@endif

