<?php
   session_start();
      /*require_once("../Connexion.php");
      $connect = new Connexion();
      $Lieux =$connect->Affiche_Lieux();*/
     ?>
 <!-- Band RYCEKA -Evènements- -Lieux- -Inscription/Connexion- -->
     <div id="topBlackBand">
         <div id="navigationBand">
             <div id="Ryceka">
                 <span  style="color:white;">
                     RY<span style="color:green;">CEKA</span>
                 </span>
                 </div>
             <div class="navigationItems" id="navEvents"> Evènements </div>
             <div class="navigationItems" id="navPlaces"> Lieux</div>
             <?php if(isset($_SESSION['UserName'])){?>
                 <div class="navigationItems" id="navCon"> <?php echo $_SESSION['UserName']?></div>
                 <div class="navigationItems" id="navCon"><a href="Controle/login.php?Dec" style="color : white; text-decoration: none;">Deconnexion</a>  </div>
             <?php }else{?>
             <div class="navigationItems" id="navCon"> Inscription/Connexion</div>
             <?php } ?>
             </div>
     </div>