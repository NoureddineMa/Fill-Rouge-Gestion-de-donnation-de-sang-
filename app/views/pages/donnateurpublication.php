 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->

<body class="index-page">
   <!-- start navbar -->
   <?php require APPROOT . '/views/inc/navbar.php'; ?> 
    <!-- end nav -->


    <h3 class="text-danger text-center py-5">TOUTES LES PUBLICATIONS</h3>
    <div class="mb-4 d-flex flex-row justify-content-around  flex-wrap ">
                        
                        
                       <!-- // foreach  -->
                        <?php foreach ($data as $value) : ?>
                        <div class="col-lg-3 col-sm-6  col-12 pt-4 ">
                            <div class="card" style="width: 18rem;">
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


   <!-- --------------------------footer---------------------------- -->
   <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->