<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Panier;
use Illuminate\Http\Request;

class CommandeController extends Controller
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
        $paniers = Panier::all();
        return view('admin.commande.commandes',compact('paniers'));
   
   }
   public  function show($id)
   {
     
    $paniers = Panier::find($id);
    $paniers->Etat = "livree";
    $paniers->save();
   
       return redirect('system-management/commande');

   }
   public function edit($id)
   {
    $paniers = Panier::find($id);
    $paniers->Etat = "non livree";
    $paniers->save();
   
       return redirect('system-management/commande');
    }
}
