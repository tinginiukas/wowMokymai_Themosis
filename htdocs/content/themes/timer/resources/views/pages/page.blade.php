@extends('layout.app')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1>{{$post->post_title}}</h1>
<p>{!! apply_filters('the_content', $post->post_content) !!}</p>
@endsection