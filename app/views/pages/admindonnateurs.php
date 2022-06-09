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
                    <section class="tableau-patient">

        <h3 class=" container  mb-0">LEs DONNATEURS
            <span class="badge badge-pill badge-danger text-uppercase mb-3 fs-3" style="font-size: 23px;" ">5 DONNATEURS</span>
                            </h3>
                            <p class="container">Voici la liste des Gens Qui veulent nous rejoindre pour etre parmis les donnataurs !                                 
                                <small>Cliquer sur le statu en attente pour confirmez le rendez-vous ! </small>
                            <p>

        <!-- table donnateurs                    -->

        <div class="container-fluid table-responsive py-5 ml-4 ">
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
                                            <th class="font-weight-light" scope="col">Statut</th>
                                            <th class="font-weight-light" scope="col">Action</th>
                                            </tr>
                                            </thead>

                                            <?php 
                                            if(!empty($data)){ ?>
                                            <tbody>
                                            <?php foreach ($data as $value) : ?>
                                            <tr>
                                            <td class="font-weight-light"> <small><?php echo $value->Nom_donnateur  ?></small></td>
                                            <td><small><?php echo $value->Prenom_donnateur  ?></small></td>
                                            <td ><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                            <td><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                            <td ><small><?php echo $value->Email_donnateur  ?></small></td>
                                            <td><small><?php echo $value->Phone_donnateur  ?></small></td>
                                            <td class="text-danger"><small><?php echo $value->Sang_donnateur  ?></small></td>
                                            <td><small><?php echo $value->date_de_naissance_d  ?></small></td>
                                            <td>  <a class="badge badge-pill btn-warning btn mb-2"  href="<?php echo URLROOT; ?>/donnateurs/updatedonnateurs/<?php echo $value->id ?>">En attente</a> 
                                            <td>  <a class="badge badge-pill btn-danger btn " href="<?php echo URLROOT; ?>/donnateurs/supprimerdonnateur/<?php echo $value->id ?>">Supprimer</a>
 </td>   
                                        </td>
                                            

                                            <?php endforeach;  ?>
                                            </tr>
                                            <?php } ?>
                                            <?php if(empty($data)) {
        echo "
             <div class='alert alert-danger mx-auto w-50 text-center' role='alert'>
              Y'a Aucun Patient  A affichier Pour l'instant !!
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
</body>

</html>