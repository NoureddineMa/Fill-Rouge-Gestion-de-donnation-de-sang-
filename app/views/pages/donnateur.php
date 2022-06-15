
    <!-- include head  -->
    <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->


<body class="index-page">
    <!-- start navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <!-- end nav -->


    <section class="textandimage ">
        <div class="d-flex flex-column flex-lg-row  container mb-3 mt-5 ">
            <div class="card container shadow mr-4  bg-body rounded mb-5 d-flex flex-column align-items-center">
                <img src="<?php echo URLROOT; ?>/assets/img/firstcard.png" style="width: 9rem;" alt="Rendez-Vous">
                <div class="card-body d-flex flex-column justify-content-center">
                    <p style="font-size: 75%; font-weight: 300;" class="card-text text-center  ">Bonjour Donateur ! Vous venez de Sauvez la vie de <span style="color: var(--Rouge);"> 3 personnes</span> en une seule fois
                    </p>
                    <a href="<?php echo URLROOT; ?>/pages/donnateurrdv" class="btn button-d-card   ">PRENDRE UN RENDEZ VOUS POUR DONNER DU SANG</a>
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

        <h3 class=" container  mb-0">LES PATIENTS
        </h3>

        <div class="container table-responsive py-5 ">
                                <table class="table table-borderless table-striped  shadow p-3 mb--3 bg-body rounded ">
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
                                            <tbody>
                                            <?php if(!empty($data)){ ?>  
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
                                            <?php } ?>
                                            </tr>
                                            <?php if(empty($data)) {
                                                echo "<div class='alert alert-danger mx-auto w-50 text-center' role='alert'>
                                                Y'a Aucun Patient A affichier Pour l'instant !!
                                                ";
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
    </section>


    <section class="publications ">
        <h3 class="text-danger my-5 text-center"> LES PUBLICATIONS</h3>
        <div class="d-flex flex-column flex-lg-row container mb-3 ">
            <div class="card container shadow mr-4  bg-body rounded mb-5">
                <img class="card-img-top " src="<?php echo URLROOT; ?>/assets/img/blood-donation-gcf342b6f5_1920.jpg" alt="Card image cap ">
                <div class="card-body ">
                    <h4 class="card-title ">DONNER DU SANG ? </h4>
                    <p class="card-text ">Le don du sang est gratuit et ne peut donner lieu au profit du donneur à aucune rémunération de quelque nature que ce soit. Le prélèvement du sang peut être effectué sur des malades en vue d'une transfusion autologue dans un but d'économie
                        du sang et de sécurité transfusionnelle.
                    </p>
                    <a href="javascript:; " class="btn button-d-card ">Voir plus</a>
                </div>
            </div>
            <div class="card container shadow mb-5 bg-body rounded mb-5 ">
                <img class="card-img-top " src="<?php echo URLROOT; ?>/assets/img/blood-sample-g6cb17978a_1920.jpg" alt="Card image cap ">
                <div class="card-body ">
                    <h4 class="card-title ">VOIR LES DONNEURS DISPONIBLE !
                    </h4>
                    <p class="card-text ">Un don de sang est un processus par lequel un donneur de sang est volontaire pour se voir prélever du sang sera gardé dans une banque du sang avant de transfuser une personne malade lors d'une transfusion sanguine</p>
                    <a href="#" class="btn button-d-card ">Voir plus</a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo URLROOT; ?>/pubs/showpubsUser" class="btn px-5 " style="color: white; background-color:black; margin:  0 auto;">VOIR PLUS D'ARTICLES</a>
        </div>

    </section>


   <!-- --------------------------footer---------------------------- -->
   <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->