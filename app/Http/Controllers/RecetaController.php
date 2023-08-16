<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

/**
 * Class RecetaController
 * @package App\Http\Controllers
 */
class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = Receta::paginate();

        return view('receta.index', compact('recetas'))
            ->with('i', (request()->input('page', 1) - 1) * $recetas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recetas = new Receta();
        return view('receta.create', compact('recetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Receta::$rules);

        $recetas = receta::create($request->all());
        $recetas->Tratamiento1=$request->input('Tratamiento1');
        $recetas->Tratamiento2=$request->input('Tratamiento2');
        $recetas->Tratamiento3=$request->input('Tratamiento3');
        $recetas->Tratamiento4=$request->input('Tratamiento4');
        $recetas->Tratamiento5=$request->input('Tratamiento5');

        

        return redirect()->route('receta.index')
            ->with('success', 'Receta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recetas = Receta::find($id);

        return view('receta.show', compact('recetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recetas = Receta::find($id);

        return view('receta.edit', compact('recetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Receta $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $recetas=receta::find($id);
        $recetas->Tratamiento1=$request->input('Tratamiento1');
        $recetas->Tratamiento2=$request->input('Tratamiento2');
        $recetas->Tratamiento3=$request->input('Tratamiento3');
        $recetas->Tratamiento4=$request->input('Tratamiento4');
        $recetas->Tratamiento5=$request->input('Tratamiento5');
        $recetas->save();

        return redirect()->route('receta.index')
            ->with('success', 'Receta updated successfully');


    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recetas = Receta::find($id)->delete();

        return redirect()->route('receta.index')
            ->with('success', 'Receta deleted successfully');
    }
}
