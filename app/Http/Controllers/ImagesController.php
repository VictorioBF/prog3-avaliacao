<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    //create
    public function create()
    {
        //retorna formulário
        return view('images.create', ['page' => 'new']);
    }

    public function insert(Request $form)
    {
        //caminho da imagem
        $imagePath = $form->file('img')->store('', 'images');
        
        //salva novo registro no BD
        $img = new Image();

        $img->image = $imagePath;
        $img->title = $form->title;
        $img->description = $form->description;

        $img->save();

        //retorna para a galeria
        return redirect()->route('images.index', ['page' => 'new']);
    }

    //read
    public function index()
    {
        //puxa os dados do BD
        $imgs = Image::orderBy('id', 'desc')->get();

        //retorna a view "galeria" junto com os dados
        return view('images.index', ['page' => 'home', 'imgs' => $imgs]);
    }

    public function show(Image $img)
    {
        return view('images.show', ['page' => 'show', 'img' => $img]);
    }
}
