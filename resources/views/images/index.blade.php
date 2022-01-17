@extends('templates.base')
@section('title', 'Galeria')

@section('content')

<div style="display: flex; width: 100%; padding-left: 10%; padding-right: 10%; flex-wrap: wrap;">
  @foreach($imgs as $img)
  <div style="width: 20%; border: 1px solid #d4d4d4; border-radius: 10px; padding: 2%; margin: 10px">
    <a href="{{ route('images.show', $img) }}">
      <img src="{{asset('images/' . $img->image)}}" style="width: 100%;" />
    </a>
    <div style="width: 100%; text-align: center">{{$img->title}}</div>
  </div>
  @endforeach
</div>
@endsection
