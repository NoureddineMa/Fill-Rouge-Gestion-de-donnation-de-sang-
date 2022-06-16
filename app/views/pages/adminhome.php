
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

         <!-- start section Messages  -->
            <!-- cards  -->
    
            <main class="row mb-4 ml-4">
                
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        
                        <div class="bg-dark  rounded" >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <p class="card-title fs-6 mb-4 text-white">DONNATEURS</p>
                                </div>
                              <p class="card-text text-end fw-bolder text-danger  fs-3"  style=" font-weight: bolder;
    font-size: 41px;"> <?php echo $data['donnateuracceptercount'][0]->count ?> </p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4 ">
                        <div class="bg-dark   rounded" >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <p class=" text-white">DEMANDES DES DONNATEURS</p>
                                </div>
                              <p class="card-text text-end  text-danger  fw-bolder mb-2 fs-3" style=" font-weight: bolder;
    font-size: 41px;"> <?php echo $data['donnateurenattentecount'][0]->count ?></p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        <div class="bg-dark  rounded " >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <p class="card-title  mb-4  text-white ">PATIENTS</p>
                                </div>
                              <p class="card-text text-end text-danger   fw-bolder fs-3"  style=" font-weight: bolder;
    font-size: 41px;"><?php echo $data['Patientcount'][0]->count ?></p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        <div class="bg-dark   rounded" >
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <p class="card-title fs-6 mb-4 text-white">PUBLICATIONS</p>
                                </div>
                              <p class="card-text text-end fw-bolder  text-danger  fs-3"  style=" font-weight: bolder;
    font-size: 41px;"> <?php echo $data['Publicationscount'][0]->count ?> </p>

                            </div>
                          </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-12 pt-4">
                        <div class="bg-dark  rounded">
                            <div class="card-body">
                                <div class="d-flex flex-column ">
                                    <p class="mb-4 text-white">MESSAGES</p>
                                </div>
                              <p class="card-text text-end  text-danger fw-bolder fs-3" style=" font-weight: bolder;
    font-size: 41px;"><?php echo $data['messagescountcount'][0]->count ?></p>

                            </div>
                          </div>
                          
                    </div>
                </main>


         <!-- end section Messages -->


     </body>

     </html>