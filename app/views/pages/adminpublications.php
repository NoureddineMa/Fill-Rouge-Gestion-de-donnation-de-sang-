        
        
        <!-- include head -->
        <?php  require APPROOT . '/views/inc/headadmin.php';  ?>
        <!-- end include head -->


        <body class="index-page">
            

        <!-- side bar  -->
        <?php  require APPROOT . '/views/inc/sidebar.php';  ?>
        <!-- end side bar -->



        <!-- start navbar -->
        <?php  require APPROOT . '/views/inc/navbaradmin.php';  ?>
        <!-- end navbar  -->

                <!-- start section Publications  -->



                <main class="container-fluid mt-5" style="position: relative;
                left: 50px;">
                    <div class="d-flex flex-column text-center justify-content-center">
                        <h1>VOILA LA PAGE DES PUBLICATIONS</h1>
                        <p>Pour ajouter des publications veuillez cliquez sur ce button</p>
                        <div class="col-md-4 d-flex justify-content-center">
                            <button type="button" class="btn  text-white bg-danger  mb-3" data-toggle="modal" data-target="#modal-form">ajouter</button>
                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card bg-white shadow border-0 mb-0">
                                                <div class="card-header bg-white ">
                                                    <div class="text-black text-center ">
                                                        <small>AJOUTER UN POST</small>
                                                    </div>
                                                </div>
                                                <div class="card-body px-lg-5 py-lg-5">
                                                    <div class="text-center text-muted mb-4">
                                                        <small>Ajouter une Photo avec un Contenu</small>
                                                    </div>

                                                    <!-- form -->

                                                    <form role="form" action="<?php echo URLROOT; ?>/Pubs/ajouterpub"" method="POST">


                                                        <div class="form-group mb-3">
                                                            <div class="input-group input-group-alternative">
                                                                <div class="input-group-prepend">

                                                                </div>
                                                                <input class="form-control" name="Image" type="file">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group input-group-alternative">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <input class="form-control" name="Title"  placeholder="title" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="input-group input-group-alternative">
                                                                <div class="input-group-prepend">
                                                                </div>
                                                                <input class="form-control" name="Description" style="padding:40px 0;" placeholder="Contenu" type="text">
                                                            </div>
                                                        </div>



                                                        <div class="text-center">
                                                            <button type="submit" name="submit" class="btn btn-primary my-4">Ajouter</button>
                                                        </div>
                                                    </form>

                                                    <!-- end form -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 d-flex flex-row justify-content-around  flex-wrap ">
                        
                        
                       <!-- // foreach  -->
                        <?php foreach ($data as $value) : ?>
                        <div class="col-lg-3 col-sm-6  col-12 pt-4 ">
                            <div class="card" style="width: 18rem;">
                                <div class="w-100 d-flex flex-row justify-content-center py-2 justify-content-around bg-dark">
                                    <a href="">
                                        <i class="ni ni-zoom-split-in " aria-hidden="true "></i>
                                    </a>
                                    <a href="<?php echo URLROOT; ?>/pubs/supprimerpost/<?php echo $value->id ?>" <i class="ni ni-zoom-split-in " aria-hidden="true "></i>
                                    </a>
                                </div>
                                <img class="card-img-top" src="<?php echo URLROOT; ?>/assets/img/img.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-text"><?php echo $value->Title ?></h3>
                                    <p class="card-text"><?php echo $value->Description ?></p>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>
                      <!-- end foreach  -->

                    </div>
                </main>

                <!-- end section Publications -->
                <!--   Core JS Files   -->
                <script src="<?php echo URLROOT; ?>./assets/js/core/jquery.min.js" type="text/javascript"></script>
                <script src="<?php echo URLROOT; ?>./assets/js/core/popper.min.js" type="text/javascript"></script>
                <script src="<?php echo URLROOT; ?>./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
                <script src="<?php echo URLROOT; ?>./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
                <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
                <script src="./assets/js/plugins/bootstrap-switch.js"></script>
                <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                <script src="<?php echo URLROOT; ?>./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
                <script src="<?php echo URLROOT; ?>./assets/js/plugins/moment.min.js"></script>
                <script src="<?php echo URLROOT; ?>./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
                <script src="<?php echo URLROOT; ?>./assets/js/plugins/bootstrap-datepicker.min.js"></script>

</body>

</html>