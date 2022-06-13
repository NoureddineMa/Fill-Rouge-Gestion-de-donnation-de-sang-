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


        
        
            <form role="form" class="w-75" style="    left: 149px;
    position: relative;
    margin-top: 50px;"  method="POST">

<div class="form-group mb-3">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">

        </div>
        <input class="form-control"  type="file" name="Image" value="<?php echo  $data->Image ; ?>">
    </div>
</div>

<div class="form-group">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
        </div>
        <input class="form-control"  type="text" name="Title" value="<?php echo  $data->Title ?>" >
    </div>
</div>

<div class="form-group">
    <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
        </div>
        <input class="form-control" name="Description"  type="text" style="padding:40px 0;" value=" <?php echo  $data->Description ?>" >
    </div>
</div>



<div class="text-center">
    <button type="submit" name="submit" class="btn btn-danger  my-4">Modifier</button>
</div>
</form>


                  
</body>

</html>