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
                                <table class="table table-borderless table-striped  shadow p-3 mb--3 bg-body rounded ">
                                    <thead style=" color:white ; background-color:var(--Rouge); ">
                                        <tr>

                                            <th class="font-weight-light" scope="col " class=" ">NOM</th>
                                            <th class="font-weight-light" scope="col ">PRENOM</th>
                                            <th class="font-weight-light" scope="col ">EMAIL</th>
                                            <th class="font-weight-light" scope="col ">SUBJECT</th>
                                            <th class="font-weight-light" scope="col ">MESSAGE</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                            <td class="font-weight-light"> <small>MAHER</small></td>
                                            <td><small>NOUREDDINE</small></td>
                                            <td ><small>noureddinemaher13@gmail.com</small></td>
                                            <td><small>Donnation de sang</small></td>
                                            <td ><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur condimentum purus, at faucibus sapien tincidunt sed. Integer ultricies velit diam, id placerat purus euismod sit amet. Aenean in finibus nulla. Nunc suscipit imperdiet sem, eget dictum urna. Curabitur in mi ut ex pulvinar posuere a et sapien.</small></td>
                                            </tr>


                                            <tr>
                                            <td class="font-weight-light"> <small>LAHLALI</small></td>
                                            <td><small>WASSIM</small></td>
                                            <td ><small>Wassim.lahlali@gmail.com</small></td>
                                            <td><small>Besoin de sang</small></td>
                                            <td ><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur condimentum purus, at faucibus sapien tincidunt sed. Integer ultricies velit diam, id placerat purus euismod sit amet. Aenean in finibus nulla. Nunc suscipit imperdiet sem, eget dictum urna. Curabitur in mi ut ex pulvinar posuere a et sapien.</small></td>
                                            </tr>

                                            <tr>
                                            <td class="font-weight-light"> <small>BASSOU</small></td>
                                            <td><small>ABDELHAMID</small></td>
                                            <td ><small>BASSOU.HAMID@gmail.com</small></td>
                                            <td><small>Besoin de sang</small></td>
                                            <td ><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consectetur condimentum purus, at faucibus sapien tincidunt sed. Integer ultricies velit diam, id placerat purus euismod sit amet. Aenean in finibus nulla. Nunc suscipit imperdiet sem, eget dictum urna. Curabitur in mi ut ex pulvinar posuere a et sapien.</small></td>
                                            </tr>
                                       
                                           
                                    </tbody>
                                </table>
                            </div>
                </section>

                <!-- end section Messages -->


</body>

</html>