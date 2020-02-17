<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
             /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        
        $all = Categorie::all();
    
            return view('admin.categorie.index',compact('all'));
    }
    public function create(){
        return view('admin.categorie.ajouter');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie->libelle = $request->input('libelle');
        $categorie->save();
        session()->flash('success','categorie a ete bien ajoutee');
        return redirect()->intended('/system-management/categorie');

    }
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin.categorie.modifier',compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $genre = Categorie::find($id);
        $genre->libelle = $request->input('libelle');
        $genre->save();
        session()->flash('info','categorie a ete bien modifiee');

        return redirect('/system-management/categorie');
    }

    public function destroy($id)
    {
        $genre = Categorie::find($id);
        $genre->delete();
        session()->flash('danger','categorie supprimee');
        return redirect('system-management/categorie');
  }

}
