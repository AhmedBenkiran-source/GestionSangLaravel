<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produit;
use App\Evenement;
use App\Categorie;
class ProduitController extends Controller
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
        
        $all = Produit::all();
    
            return view('admin.produit.index',compact('all'));
    }
    public function show($id){
        
        $produit = Produit::find($id);
    
            return view('admin.produit.afficher',compact('produit'));
    }
    public function create(){
        
        $categories = Categorie::all();
        $evenement = Evenement::all();

        return view('admin.produit.ajouter',compact('categories','evenement'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $products = new Produit();

        $products->NomProduit = $request->input('nom');
        $products->Evenement = $request->input('evenement');
        $products->categorie = $request->input('categorie');

        $products->Prix = $request->input('prix');
        $products->Quantite = $request->input('quantite');

        $products->save();
        session()->flash('success','Produit a ete bien ajoute');
        return redirect()->intended('/system-management/produit');
    
    }
    public function edit($id)
    {
        $produit = Produit::find($id);
        // Redirect to country list if updating country wasn't existed
        $evenement = Evenement::all();
        $categorie = Categorie::all();
        return view('admin.produit.modifier',compact('produit','evenement','categorie'));
    }
    
    public function update(Request $request, $id)
    {
        $products = Produit::find($id);
        $products->NomProduit = $request->input('nom');
        $products->Evenement = $request->input('marque');
        $products->categorie = $request->input('categorie');
       
        $products->Prix = $request->input('prix');
        $products->Quantite = $request->input('quantite');
    

        $products->save();
        session()->flash('success','Produit a ete bien modifie');
        return redirect()->intended('/system-management/produit');

    }
    public function destroy($id)
    {
        $marque = Produit::find($id);
        $marque->delete();
        session()->flash('danger','Produit supprime');
        return redirect('system-management/produit');
    }
    
}
