@extends('layout.app')

@section('content')

<br>
<br>
<br>
<br>
<br>

<ul>
@foreach($services as $service)

	<li><i class="{{ $service->icon }}"></i><a href="{{ $service->url }}">{{ $service->title }}</a></li>

@endforeach
</ul>

@endsection