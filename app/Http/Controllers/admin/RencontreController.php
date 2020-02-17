<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Rencontre;

use Illuminate\Http\Request;

class RencontreController extends Controller
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
        
        $all = Rencontre::all();
    
            return view('admin.rencontre.index',compact('all'));
    }
    public function create(){
        return view('admin.rencontre.ajouter');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $rencontre = new Rencontre();
        $rencontre->libelle = $request->input('libelle');
        $rencontre->duree = $request->input('duree');

        $rencontre->lieu = $request->input('lieu');

        $rencontre->save();
        session()->flash('success','rencontre a ete bien ajoute');
        return redirect()->intended('/system-management/rencontre');

    }
    public function edit($id)
    {
        $rencontre = Rencontre::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin.rencontre.modifier',compact('rencontre'));
    }

    public function update(Request $request, $id)
    {
        $rencontre = Rencontre::find($id);
        $rencontre->libelle = $request->input('libelle');
        $rencontre->duree = $request->input('duree');

        $rencontre->lieu = $request->input('lieu');
        $rencontre->save();
        session()->flash('info','rencontre a ete bien modifie');

        return redirect('/system-management/rencontre');
    }

    public function destroy($id)
    {
        $genre = Rencontre::find($id);
        $genre->delete();
        session()->flash('danger','rencontre supprime');
        return redirect('system-management/rencontre');
  }

}
