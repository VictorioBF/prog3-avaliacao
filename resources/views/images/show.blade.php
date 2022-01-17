@extends('templates.base')
@section('title', 'Imagem')

@section('content')
<div style="width: 100%; border: 1px solid #d4d4d4; border-radius: 10px; padding: 2%">
  <img src="{{asset('images/' . $img->image)}}" style="width: 80%; display: block; margin: auto;" />
  <div style="width: 100%; text-align: center; margin-top: 10px; font-weight: bold">{{$img->title}}</div>
  <div style="width: 100%; text-align: center; margin-top: 10px">{{ $img->description }}</div>
</div>
<p></p>
@endsection
