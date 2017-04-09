@extends('layout.app')

@section('content')

<br>
<br>
<br>
<br>
<br>

<h1>{{ $service->title }}</h1>

<p>
	{!! $service->content !!}
</p>

<img src="{{ wp_get_attachment_url( $service->thumbnail ) }}">

@endsection