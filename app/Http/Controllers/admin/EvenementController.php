<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
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
        
    $all = Evenement::all();

        return view('admin.evenement.index',compact('all'));
}
public function create(){
    return view('admin.evenement.ajouter');
}
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

public function store(Request $request)
{
    $evenement = new Evenement();
    $evenement->typeevent = $request->input('typeevent');
    $evenement->save();
    session()->flash('success','Evenement a ete bien ajoute');
    return redirect()->intended('/system-management/evenement');

}
public function edit($id)
{
    $evenement = Evenement::find($id);
    // Redirect to country list if updating country wasn't existed
   
    return view('admin.evenement.modifier',compact('evenement'));
}

public function update(Request $request, $id)
{
    $evenement = Evenement::find($id);
    $evenement->typeevent = $request->input('typeevent');
    $evenement->save();
    session()->flash('info','Evenement a ete bien modifie');

    return redirect('/system-management/evenement');
}

public function destroy($id)
{
    $evenement = Evenement::find($id);
    $evenement->delete();
    session()->flash('danger','Evenement supprime');
    return redirect('system-management/evenement');
}

}
