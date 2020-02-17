@extends('admin.layouts.template')
@section('content')


    <!-- Main wrapper  -->
    <div id="main-wrapper">
       
     
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Produit</h3> </div>
                <div class="col-md-7 align-self-center">
                   
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
        
                        <div class="card">
                            <div class="card-title">
                                

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                <form class="form-horizontal" action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                            <div class="box-body">

                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">Nom</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" class="form-control" name="nom" placeholder="Name">
                               
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="Brand" class="col-sm-2 control-label">Evenement</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="marque" >
                                                    <option value="" >---selected---</option>
                                                @if($evenement)
                                                    @foreach($evenement as $brand)
                                                    <option value = {{ $brand->id }} >{{ $brand->typeevent }}</option>
                                                    @endforeach
                                                @endif
                                    </select>
                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Brand" class="col-sm-2 control-label">Categorie</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="categorie" >
                                                    <option value="" >---selected---</option>
                                                @if($categories)
                                                    @foreach($categories as $brand)
                                                    <option value = {{ $brand->id }} >{{ $brand->libelle }}</option>
                                                    @endforeach
                                                @endif
                                    </select>
                                  
                                </div>
                            </div>
                         
                          
                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">Prix</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" class="form-control" name="prix" placeholder="Name">
                               
                                </div>
                            </div>   
                            <div class="form-group" >
                                <label for="libelle" class="col-sm-2 control-label">Quantite</label>
                            
                                <div class="col-sm-12">
                                <input id="libelle" type="text" class="form-control" name="quantite" placeholder="Name">
                               
                                </div>
                            </div>     
                          
                         
                            <div class="box-footer">
                            <button type="reset" class="btn btn-default">Annuler</button>
                            <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                </form>
                               </div>
                         
                            </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
      
        </div>
        <!-- End Page wrapper  -->
    </div>

@endsection
