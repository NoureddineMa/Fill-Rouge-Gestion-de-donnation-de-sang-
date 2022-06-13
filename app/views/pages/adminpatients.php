<?php  require APPROOT . '/views/inc/headadmin.php';  ?>

<body class="index-page">
          <!-- side bar  -->
          <?php require APPROOT . '/views/inc/sidebar.php'; ?>
          <!-- end side bar -->



            <!-- start navbar -->
            <?php require APPROOT . '/views/inc/navbaradmin.php'; ?>

                <!-- end navbar  -->

                <!-- start section table  -->
                <section class="tableau-patient " style="position: relative;
                ">
                    <div class="title-cards d-flex justify-content-center">
                    <h3 class=" display-4 mb-0 ">VOICI LA LISTE DES PATIENTS</h3>

                </div>
                <hr class="bg-danger mb-3 w-50 ">
              

                    <h3 class=" container mt-3 mb-0 ">LES PATIENTS
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
                                            <th class="font-weight-light" scope="col-2 ">PHONE</th>
                                            <th class="font-weight-light" scope="col ">SANG</th>
                                            <th class="font-weight-light" scope="col ">DATE DE NAISSANCE</th>

                                            </tr>
                                            </thead>

                                            <?php 
                                            if(!empty($data)){ ?>
                                            <tbody>
                                            <?php foreach ($data as $value) : ?>
                                            <tr>
                                            <td class="font-weight-light"> <small><?php echo $value->Nom_patient  ?></small></td>
                                            <td><small><?php echo $value->Prenom_patient  ?></small></td>
                                            <td ><small><?php echo $value->Adresse_patient  ?></small></td>
                                            <td><small><?php echo $value->Ville_patient  ?></small></td>
                                            <td ><small><?php echo $value->Email_patient  ?></small></td>
                                            <td class="col-2"><small><?php echo $value->Phone_patient  ?></small></td>
                                            <td class="text-danger"><small><?php echo $value->Sang_patient  ?></small></td>
                                            <td><small><?php echo $value->date_de_naissance_p  ?></small></td>
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
    </section>
                <!-- end section table  -->



                <!--   Core JS Files   -->
                <script src="./assets/js/core/jquery.min.js " type="text/javascript "></script>
                <script src="./assets/js/core/popper.min.js " type="text/javascript "></script>
                <script src="./assets/js/core/bootstrap.min.js " type="text/javascript "></script>
                <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js "></script>
                <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
                <script src="./assets/js/plugins/bootstrap-switch.js "></script>
                <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                <script src="./assets/js/plugins/nouislider.min.js " type="text/javascript "></script>
                <script src="./assets/js/plugins/moment.min.js "></script>
                <script src="./assets/js/plugins/datetimepicker.js " type="text/javascript "></script>
                <script src="./assets/js/plugins/bootstrap-datepicker.min.js "></script>

</body>

</html>