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
         <section class="section-cards mt-5 " style="position: relative; left: 30px; " id="le-pq ">
             <div class="title-cards d-flex justify-content-center ">
                 <h3 class="display-4 mb-0 ">VOICI LES MESSAGES RECU</h3>

             </div>
             <div class="container table-responsive py-5 ">
                 <!-- table table-borderless table-striped  shadow p-3 mb--3 bg-body rounded -->
                 <table class="table  table-borderless  table-striped shadow p-3 mb--3  rounded ">
                     <thead style=" color:white ; background-color:var(--Rouge); ">
                         <tr>

                             <th class="font-weight-light" scope="col " class=" ">NOM</th>
                             <th class="font-weight-lights" scope="col ">PRENOM</th>
                             <th class="font-weight-light" scope="col ">EMAIL</th>
                             <th class="font-weight-light" scope="col ">CONTEXTE</th>
                             <th class="font-weight-light" scope="col ">MESSAGE</th>

                         </tr>
                     </thead>
                         <tbody>
                         <?php foreach ( $data as $value) : ?>
                         <tr>
                        <td class="font-weight-light"> <small><?php echo $value->Nom ?></small></td>
                        <td><small><?php echo $value->Prenom ?></small></td>
                        <td ><small><?php echo $value->Email ?></small></td>
                        <td><small><?php echo $value->Contexte ?></small></td>
                        <td ><small><?php echo $value->Msg ?></small></td>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
                 </table>
             </div>
         </section>

         <!-- end section Messages -->


     </body>

     </html>