 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->

<body class="index-page">
   <!-- start navbar -->
   <?php require APPROOT . '/views/inc/navbar.php'; ?> 
    <!-- end nav -->


    <section class="textandimage ">
        <div class="d-flex flex-row  container mb-3 mt-5 ">
            <div class="card container shadow mr-4  bg-body rounded mb-5 d-flex flex-column align-items-center">
                <img src="<?php echo URLROOT; ?>/assets/img/firstcard.png" style="width: 9rem;" alt="Rendez-Vous">
                <div class="card-body d-flex flex-column justify-content-center">
                    <p style="font-size: 75%; font-weight: 300;" class="card-text text-center  ">Bonjour Donateur ! Vous venez de Sauvez la vie de <span style="color: var(--Rouge);">3 personnes</span> en une seule fois
                    </p>
                    <a href="<?php echo URLROOT; ?>/pages/patientrdv" class="btn button-d-card   ">BESOIN DE SANG</a>
                </div>
            </div>
            <div class="card container shadow mb-5 bg-body rounded mb-2 d-flex flex-column align-items-center ">
                <img src="<?php echo URLROOT; ?>/assets/img/secondcard.png " style="width: 10rem; " alt="Contact Us ">
                <div class="card-body ">
                    <div class="card-body d-flex flex-column justify-content-center ">
                        </h4>
                        <p style="font-size: 75%;
                        font-weight: 300;" class="card-text text-center   ">Bonjour Donateur ! Veuillez <span style="color: var(--Rouge);">cliquer sur cette bouton </span> pour envoyez un message a l'admin</p>
                        <a href="<?php echo URLROOT; ?>/pages/contactus" class="btn button-d-card  ">CONTACT US </a>
                    </div>
                </div>
            </div>
    </section>


    <section class="tableau-patient">

        <h3 class=" container  mb-0">LEs DONNATEURS
            <span class="badge badge-pill badge-danger text-uppercase fs-3" style="font-size: 23px;" ">5 DONNATEURS</span>
                            </h3>

                            <div class="container table-responsive py-5 ">
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
                                  
                                    </tr>
                                    </thead>


                                    <?php
                                      $acc =  $data["acc"];
                                      
                                    ?>

                                    <?php 
                                    if(!empty($acc)){ ?>
                                    <tbody>
                                    <?php foreach ($acc as $value) : ?>
                                    <tr>
                                    <td class="font-weight-light"> <small><?php echo $value->Nom_donnateur  ?></small></td>
                                    <td><small><?php echo $value->Prenom_donnateur  ?></small></td>
                                    <td ><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                    <td><small><?php echo $value->Adresse_donnateur  ?></small></td>
                                    <td ><small><?php echo $value->Email_donnateur  ?></small></td>
                                    <td><small><?php echo $value->Phone_donnateur  ?></small></td>
                                    <td class="text-danger"><small><?php echo $value->Sang_donnateur  ?></small></td>
                                    <td><small><?php echo $value->date_de_naissance_d  ?></small></td>
</td>   
                                </td>
                                    

                                    <?php endforeach;  ?>
                                    </tr>
                                    <?php } ?>
                                    <?php if(empty($acc)) {
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
    </section>

<!-- --------------------------footer---------------------------- -->
<?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->