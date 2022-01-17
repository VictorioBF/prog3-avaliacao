@extends('templates.base')
@section('title', 'Galeria')

@section('content')

<div class="row">
    <table class="table">
        @foreach($imgs as $img)
        <tr>
            <td>{{$img->id}}</td>
            <td>{{$img->title}}</td>
            <td>{{$img->description}}</td>
            <td>{{$img->img}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
