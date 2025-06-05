<?php
include 'header.php';
?>
   <header>
        <div class="nav-container">
                <div class="navbar-1">
                    <div class="logo-container">
                        <img src="Images/logo.jpeg" alt="" class="logo">
                        <h2><strong>Institut des Beaux Arts de Nkongsamba<br></strong></h2>
                    </div>
                </div>
                <div class="navbar-2">
                <nav>
                        <div class="menu-toggle" onclick="toggleMenu()">
                            <hr>
                            <hr>
                            <hr>
                        </div>
                     <ul class="nav-links">
                        <li class="active"><a href="?nav=home">Accueil</a></li>
                        <li><a href="#">Departements <span class="indicator"><i class="fa fa-angle-down"::before></i></span></a>
                            <ul class="dropdown">
                              <li><a href="#">Cinema et AudioVisuel </span></a></li>
                              <li><a href="#">Architecture et Urbanisme</a></li>
                              <li><a href="#">Etudes Theatrales</a></li>
                              <li><a href="#">Patrimoine, Muselogie et Tourisme</a></li>
                              <li><a href="#">Art Plastique et Histoire de l'Art</a></li>
                              <li><a href="#">Musicologie, Gestion et Conservation de Patrimoine</a></li>
                              <li><a href="#">Arts et Metiers de l'Habillement</a></li>
                            </ul>
                          </li>
                        <li><a href="#">Actualites</a></li>
                        <li><a href="?nav=concours">Concours <span class="indicator"><i class="fa fa-angle-down"::before></i></span></a>
                          <ul class="dropdown-2">
                            <li><a href="#">communiques</a></li>
                            <li><a href="#">admissions</a></li>
                            <li class="dropdown-3"><a href="#"> inscriptions <span class="indicator"><i class="fa fa-angle-right"::before></i></a>
                                <ul class="dropdown-right">
                                    <li><a href="formulaire.html"target="_blank">remplir le formulaire</a></li>
                                    <li><a href="?nav=info">finaliser l'inscription</a></li>  
                                </ul>
                            </li>
                            <li><a href="#">resultats</a></li>
                          </ul>
                        </li>
                        <li><a href="?nav=contact">Contact</a></li>
                        <li><a href="?nav=about">A propos</a></li>
                     </ul> 
                    </nav>
                </div>
            </div>
    </header><br>
    