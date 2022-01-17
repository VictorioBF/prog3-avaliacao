@extends('templates.base')
@section('title', 'Nova Imagem')
@section('h1', 'Nova Imagem')

@section('content')
<div class="row">
    <div class="col-4">

        <form method="post" action="{{ route('images.insert') }}">
            @csrf
            <div class="mb-3">
                <label for="img" class="form-label">Imagem:</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

    </div>
</div>
@endsection