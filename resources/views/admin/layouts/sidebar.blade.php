    <!-- Left Sidebar  -->
    <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a  href="{{ url('admin/home') }}" aria-expanded="false"><i class="fa fa-tachometer"></i> Acceuil</a>
                            
                        </li>
                        <li> <a  href="{{ url('system-management/produit') }}" aria-expanded="false"><i class="fa fa-shopping-basket"></i><span class="hide-menu">Produits</span></a>
                            
                            </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cart-plus"></i><span class="hide-menu">Dépenses</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('system-management/categorie') }}">Categorie</a></li>
                                <li><a href="{{ url('system-management/evenement') }}">Evenement</a></li>
                                
                         </ul>
                        </li>
                        <li> <a  href="{{ url('system-management/rencontre') }}" aria-expanded="false"><i class="fa fa-group"></i><span class="hide-menu">Rencontre</span></a>
                            
                            </li>
                        <li> <a href="{{ url('system-management/collecte') }}" aria-expanded="false"><i class="fa fa-shopping-basket"></i><span class="hide-menu">Collecte</span></a>
                            
                       
                        
                       
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cart-plus"></i><span class="hide-menu">Compte</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('system-management/compteadmin') }}">Admin</a></li>
                                
                                
                         </ul>
                            <li> <a  href="{{ url('system-management/adherente') }}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Adherent</span></a>
                            
                            </li>
						
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->