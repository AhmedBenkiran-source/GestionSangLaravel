<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Adherent;
class AdherenteController extends Controller
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
        
    $all = Adherent::all();

        return view('admin.adherent.index',compact('all'));
}
public function create(){
    return view('admin.adherent.ajouter');
}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

public function store(Request $request)
{
    $adherent = new Adherent();
    $adherent->NomAdherents = $request->input('nom');
    $adherent->Email = $request->input('mail');
    $adherent->Numerotelephone = $request->input('numtele');

    $adherent->save();
    session()->flash('success','adherent a ete bien ajoutee');
    return redirect()->intended('/system-management/adherente');

}
public function edit($id)
{
    $adherent = Adherent::find($id);
   
    return view('admin.adherent.modifier',compact('adherent'));
}

public function update(Request $request, $id)
{
    $adherent = Adherent::find($id);
    $adherent->NomAdherents = $request->input('nom');
    $adherent->Email = $request->input('mail');
    $adherent->Numerotelephone = $request->input('numtele');

    $adherent->save();   
    session()->flash('info','adherente a ete bien modifiee');

    return redirect('/system-management/adherente');
}

public function destroy($id)
{
    $adherent = Adherent::find($id);
    $adherent->delete();
    session()->flash('danger','adherent supprimee');
    return redirect('system-management/adherente');
}

}
