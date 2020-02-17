<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorie;
use App\Admin;
class AdminController extends Controller
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
        $admins = Admin::all();
            return view('admin.compteadmin',compact('all','admins'));
    } 
    public function edit($id)
    {
        $admin = Admin::find($id);
        $categorie = Categorie::all();
        return view('admin.modifieradmin',compact('admin','categorie'));

    }
    public function update(Request $request, $id)
    {
        $genre = Admin::find($id);
        $genre->username = $request->input('libelle');
        $genre->email = $request->input('libelles');
        $genre->save();
        session()->flash('info','Admin a ete bien modifie');

        return redirect('/system-management/compteadmin');
    }

    public function destroy($id)
    {
        $marque = Admin::find($id);
        $marque->delete();
        session()->flash('danger','Admin supprime');
        return redirect('system-management/compteadmin');
    }

}
