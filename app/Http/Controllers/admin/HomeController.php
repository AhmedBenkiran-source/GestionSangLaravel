<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Evenement;
use App\Produit;
use App\User;
use App\Adherent;

class HomeController extends Controller
{
           /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin';
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
        $produits = Produit::all();
        $users = User::all();
        $adhernets = Adherent::all();

         return view('admin.home',compact('all','produits','users','adhernets'));
    }
}
