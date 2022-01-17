@extends('templates.base')
@section('title', 'Imagem')

@section('content')
<p>{{$img->img}}</p>
<h1>{{ $img->title }}</h1>
<p>{{ $img->desc }}</p>
@endsection