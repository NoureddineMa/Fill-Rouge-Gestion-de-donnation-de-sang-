

    <!-- include head  -->
      <?php require APPROOT . '/views/inc/headadmin.php'; ?>
     <!-- end head -->

    <body class="index-page">
    <!-- side bar  -->
    <?php require APPROOT . '/views/inc/sidebar.php'; ?>
    <!-- end side bar -->



            <!-- start navbar -->
            <?php require APPROOT . '/views/inc/navbaradmin.php'; ?>
            <!-- end navbar  -->

                


                    <!-- start section table  -->
                    <section class="tableau-patient mt-5">
                        
                    <div class="ml-5">
        <h3 class="display-4 mb-0">LEs DEMANDES DE  DONNATION
                            </h3>
                            <p class="">Voici la liste des Gens Qui veulent nous rejoindre pour etre parmis les donnataurs !                                 
                            <p>
                    </div>

        <!-- table donnateurs                    -->

        <div class="container-fluid table-responsive py-3 ml-4 ">
                                <table class="table table-borderless  table-striped  shadow p-3 mb--3 bg-body rounded ">
                                    <thead style=" color:white ; background-color:var(--Rouge); ">
                                        <tr>

                                            <th class="font-weight-light" scope="col " class=" ">NOM</th>
                                            <th class="font-weight-light" scope="col ">PRENOM</th>
                                            <th class="font-weight-light" scope="col ">ADRESSE</th>
                                            <th class="font-weight-light" scope="col ">VILLE</th>
                                            <th class="font-weight-light" scope="col ">EMAIL</th>
                                            <th class="font-weight-light" scope="col ">PHONE</th>
                                            <th class="font-weight-light" scope="col ">SANG</th>
                                            <th class="font-weight-light" scope="col ">DATE DE NAISSANCE</th>
                                            <th class="font-weight-light" scope="col">STATUT</th>
                                            <th class="font-weight-light" scope="col">ACTION</th>
                                            </tr>
                                            </thead>

                                            <?php 
                                            
                                            $notAccepted =  $data["not-accepted"]
                                            
                                            ?>

                                            <?php 
                                            if(!empty($notAccepted)){ ?>
                                            <tbody>
                                            <?php foreach ($notAccepted as $value) : ?>
                                            <tr>
                                            <td class="font-weight-light"> <small><?php echo $value->Nom_donnateur  ?></small></td>
                                            <td><small><?php echo $value->Prenom_donnateur  ?></small></td>
                                            <td ><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                            <td><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                            <td ><small><?php echo $value->Email_donnateur  ?></small></td>
                                            <td><small><?php echo $value->Phone_donnateur  ?></small></td>
                                            <td class=""><small><?php echo $value->Sang_donnateur  ?></small></td>
                                            <td><small><?php echo $value->date_de_naissance_d  ?></small></td>
                                            <td  class="text-warning"><small>En Attente</small></td>
                                            <td class="d-flex">  <a class="badge badge-pill btn-success btn"  href="<?php echo URLROOT; ?>/donnateurs/updatedonnateurs/<?php echo $value->id ?>">Accepter</a> 
                                          <a class="badge badge-pill btn-danger btn " href="<?php echo URLROOT; ?>/donnateurs/supprimerdonnateur/<?php echo $value->id ?>">Refusez</a> </td>
 </td>   
                                        </td>
                                            

                                            <?php endforeach;  ?>
                                            </tr>
                                            <?php } ?>
                                            <?php if(empty($notAccepted)) {
        echo "
             <div class='alert alert-danger mx-auto w-50 text-center' role='alert'>
              Y'a Aucune demande de donnation  A affichier Pour l'instant !!
            </div>
        ";
      }  
    ?>


            
                                    </tbody>
                                </table>
                            </div>
    

        <!-- end table                            -->

    </section>



    <section class="tableau-patient mt-5">
<div class="ml-5">
<h3 class="display-4 mb-0">LEs  DONATEURS</h3>
                    <p class="">Voici la liste des donnataurs !                                 
                    <p>
                    </div>

<!-- table donnateurs                    -->

<div class="container-fluid table-responsive  ml-4 py-3 ">
                        <table class="table table-borderless  table-striped  shadow p-3 mb--3 bg-body rounded ">
                            <thead style=" color:white ; background-color:var(--Rouge); ">
                                <tr>

                                    <th class="font-weight-light" scope="col " class=" ">NOM</th>
                                    <th class="font-weight-light" scope="col ">PRENOM</th>
                                    <th class="font-weight-light" scope="col ">ADRESSE</th>
                                    <th class="font-weight-light" scope="col ">VILLE</th>
                                    <th class="font-weight-light" scope="col ">EMAIL</th>
                                    <th class="font-weight-light" scope="col ">PHONE</th>
                                    <th class="font-weight-light" scope="col ">SANG</th>
                                    <th class="font-weight-light" scope="col ">DATE DE NAISSANCE</th>
                                    <th class="font-weight-light" scope="col">STATUT</th>
                                    <th class="font-weight-light" scope="col">ACTION</th>
                                    </tr>
                                    </thead>


                                    <?php
                                      $accepted =  $data["accepted"]
                                    
                                    ?>

                                    <?php 
                                    if(!empty($accepted)){ ?>
                                    <tbody>
                                    <?php foreach ($accepted as $value) : ?>
                                    <tr>
                                    <td class="font-weight-light"> <small><?php echo $value->Nom_donnateur  ?></small></td>
                                    <td><small><?php echo $value->Prenom_donnateur  ?></small></td>
                                    <td ><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                    <td><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                    <td ><small><?php echo $value->Email_donnateur  ?></small></td>
                                    <td><small><?php echo $value->Phone_donnateur  ?></small></td>
                                    <td class=""><small><?php echo $value->Sang_donnateur  ?></small></td>
                                    <td><small><?php echo $value->date_de_naissance_d  ?></small></td>
                                    <td>  <small class="text-success">Accepté</small> </td>
                                    <td>  <a class="badge badge-pill btn-danger btn " href="<?php echo URLROOT; ?>/donnateurs/supprimerdonnateur/<?php echo $value->id ?>">Supprimer</a>
</td>   
                                </td>
                                    

                                    <?php endforeach;  ?>
                                    </tr>
                                    <?php } ?>
                                    <?php if(empty($accepted)) {
echo "
     <div class='alert alert-danger mx-auto w-50 text-center' role='alert'>
      Y'a Aucun Donnateur  A affichier Pour l'instant !!
    </div>
";
}  
?>


    
                            </tbody>
                        </table>
                    </div>


<!-- end table                            -->

</section>
            <!-- end section table  -->
            <script src="<?php echo URLROOT; ?>/public/assets/js/accept.js "></script>
</body>

</html>