        
        
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
                        <div class="col-md-4 d-flex mx-auto " style="left:122px">
                            <button type="button" class="btn  text-white bg-danger d-flex   mb-3" data-toggle="modal"  data-target="#modal-form">ajouter</button>
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
                                                            <button type="submit" name="submit" class="btn btn-danger  my-4">Ajouter</button>
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
                       <?php 
        if(!empty($data)){
        ?>
                        <?php foreach ($data as $value) : ?>
                        <div class="col-lg-3 col-sm-6  col-12 pt-4 ">
                            <div class="card" style="width: 18rem;">
                                <div class="w-100 d-flex flex-row justify-content-center py-2 justify-content-around bg-dark">
                                    <a href="">
                                     <svg class="text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg>
                                    </a>
                                    <a href="<?php echo URLROOT; ?>/pubs/supprimerpost/<?php echo $value->id ?>"> <svg class="text-danger" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
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
                      <?php } ?>
                      <?php if(empty($data)) {
        echo "
             <div class='alert alert-danger mx-auto w-50 text-center' role='alert'>
              Y'a Aucune Publication A Affichier Pour l'instant !!
            </div>
        ";
      }  
    ?>
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