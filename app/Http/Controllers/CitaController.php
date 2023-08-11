<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Cita;
use App\Models\User;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class CitaController extends Controller
{    
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $VCitas = Cita::latest()->paginate(5);
        
        //render view with posts
        return view('Citas.index', compact('VCitas'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('Citas.create');
    }
 
    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'paciente_id' => 'required',
            'Fecha' => 'required|unique:Citas,Fecha,|min:5'
            
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/Citas', $image->hashName());

        //create post
        Cita::create([
            'paciente_id' => $request->paciente_id,
            'Fecha' => $request->Fecha
           
        ]);

        //redirect to index
        return redirect()->route('Citas.index')->with(['success' => 'Los datos se han guardado!']);
    }
    
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Cita::findOrFail($id);

        //render view with post
        return view('Citas.show', compact('post'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Cita::findOrFail($id);

        //render view with post
        return view('Citas.edit', compact('post'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
           'paciente_id' => 'required',
            'Fecha'     => 'required|min:5'
            
        ]);

        //get post by ID
        $post = Cita::findOrFail($id);


            //update post without image
            $post->update([
                'paciente_id' => $request->paciente_id,
                'Fecha'     => $request->Fecha,
                
            ]);
        

        //redirect to index
        return redirect()->route('Citas.index')->with(['success' => 'Se actualizaron los datos!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Cita::findOrFail($id);

        //delete image
       

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('Citas.index')->with(['success' => 'Se ha eliminado el registro!']);
    }
}