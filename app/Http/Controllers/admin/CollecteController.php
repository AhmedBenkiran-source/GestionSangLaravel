<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Collecte;

use Illuminate\Http\Request;

class CollecteController extends Controller
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
        
        $all = Collecte::all();
    
            return view('admin.collecte.index',compact('all'));
    }
    public function create(){
        return view('admin.collecte.ajouter');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $genre = new Collecte();
        $genre->libelle = $request->input('libelle');
        $genre->NumTele = $request->input('numtele');

        $genre->save();
        session()->flash('success','collecte a ete bien ajoute');
        return redirect()->intended('/system-management/collecte');

    }
    public function edit($id)
    {
        $collecte = Collecte::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin.collecte.modifier',compact('collecte'));
    }

    public function update(Request $request, $id)
    {
        $genre = Collecte::find($id);
        $genre->libelle = $request->input('libelle');
        $genre->NumTele = $request->input('numtele');
        $genre->save();
        session()->flash('info','Collecte a ete bien modifie');

        return redirect('/system-management/collecte');
    }

    public function destroy($id)
    {
        $collecte = Collecte::find($id);
        $collecte->delete();
        session()->flash('danger','Collecte supprime');
        return redirect('system-management/collecte');
  }

}
