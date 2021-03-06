 <!-- include head  -->
 <?php require APPROOT . '/views/inc/head.php'; ?>
    <!-- end head -->

<body class="index-page">
   <!-- start navbar -->
   <?php require APPROOT . '/views/inc/navbar.php'; ?> 
    <!-- end nav -->


    <h3 class="text-danger text-center py-5">TOUTES LES PUBLICATIONS</h3>
    <div class="mb-4 d-flex flex-column flex-md-row flex-lg-row justify-content-around  flex-wrap container-fluid ">
                        
    <?php 
        if(!empty($data)){
        ?>
                       <!-- // foreach  -->
                        <?php foreach ($data as $value) : ?>
                        <div class="col-lg-3  col-12 pt-4 mb-3">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="http://localhost/Fill-Rouge-Gestion-de-donnation-de-sang-/public/uploads/<?php echo $value->Image?>" alt="Card image cap" style="height:200px;">
                                <div class="card-body">
                                    <h3 class="card-text"><?php echo $value->Title ?></h3>
                                    <p class="card-text pCard" style="height: 200px;overflow-y:scroll;overflow-y:red;"><?php echo $value->Description ?></p>
                                    <button class="btn btn-sm mt-3 btn-danger" type="button">voir plus</button>
                                </div>
                            </div>
                        </div>
                      <?php endforeach;} ?>
                      <!-- end foreach  -->

                    </div>
                
                    <?php 
      if(empty($data)) {
        echo "
             <div class='alert alert-danger mx-auto w-50 text-center d-flex justify-content-center' role='alert';>
              There are no Publications yet!
            </div>
        ";
      }  
    ?>


   <!-- --------------------------footer---------------------------- -->
   <?php  require APPROOT . '/views/inc/footer.php';  ?>
    <!-- Footer -->