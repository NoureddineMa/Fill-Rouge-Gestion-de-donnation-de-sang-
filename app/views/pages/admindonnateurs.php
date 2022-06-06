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

                <!-- start section rendezvous -->
                <section class="section-cards mt-5 " id="le-pq ">
                    <div class="title-cards d-flex justify-content-center ">
                        <h3 class="display-4 mb-0 ">VOICI LA LISTE DES RENDEZ-VOUS</h3>

                    </div>
                    <hr class="bg-danger w-50 ">
                    <div class=" container d-flex flex-row mt-5 justify-content-between mb-5 flex-wrap ">
                        <div class="first-card  d-flex flex-row justify-content-between text-center shadow-sm p-3 mb-5 rounded border border-danger ">
                            <div>
                                <p class="font-weight-bold text-dark ">Nom : </p>
                                <p class="font-weight-bold text-dark ">Prenom : </p>
                                <p class="font-weight-bold text-dark ">Age : </p>
                                <p class="font-weight-bold text-dark ">Sexe : </p>
                                <p class="font-weight-bold text-dark ">Type Sang : </p>
                                <p class="font-weight-bold text-dark ">Ville : </p>
                                <a class="btn btn-success " style="color:white;margin-right: 17px; ">Accepter</a>

                            </div>
                            <div>
                                <p class="font-weight-light text-dark ">MAHER</p>
                                <p class="font-weight-light text-dark ">Noureddine</p>
                                <p class="font-weight-light text-dark ">22 Ans</p>
                                <p class="font-weight-light text-dark ">Homme</p>
                                <p class="font-weight-light text-dark ">A+</p>
                                <p class="font-weight-light text-dark ">Rabat</p>
                                <a class="btn text-white " style="background-color: var(--Rouge); ">Refuser</a>

                            </div>

                        </div>

                        <div class="first-card d-flex flex-row justify-content-between text-center shadow-sm p-3 mb-5 rounded  border border-danger">
                            <div>
                                <p class="font-weight-bold text-dark ">Nom : </p>
                                <p class="font-weight-bold text-dark ">Prenom : </p>
                                <p class="font-weight-bold text-dark ">Age : </p>
                                <p class="font-weight-bold text-dark ">Sexe : </p>
                                <p class="font-weight-bold text-dark ">Type Sang : </p>
                                <p class="font-weight-bold text-dark ">Ville : </p>
                                <a class="btn btn-success " style="color:white;margin-right: 17px; ">Accepter</a>

                            </div>
                            <div>
                                <p class="font-weight-light text-dark ">MAHER</p>
                                <p class="font-weight-light text-dark ">Noureddine</p>
                                <p class="font-weight-light text-dark ">22 Ans</p>
                                <p class="font-weight-light text-dark ">Homme</p>
                                <p class="font-weight-light text-dark ">A+</p>
                                <p class="font-weight-light text-dark ">Rabat</p>
                                <a class="btn text-white " style="background-color: var(--Rouge); ">Refuser</a>

                            </div>

                            

                        </div>

                        <div class="first-card  d-flex flex-row justify-content-between text-center  shadow-sm p-3 mb-5 rounded border border-danger ">
                            <div>
                                <p class="font-weight-bold text-dark ">Nom : </p>
                                <p class="font-weight-bold text-dark ">Prenom : </p>
                                <p class="font-weight-bold text-dark ">Age : </p>
                                <p class="font-weight-bold text-dark ">Sexe : </p>
                                <p class="font-weight-bold text-dark ">Type Sang : </p>
                                <p class="font-weight-bold text-dark ">Ville : </p>
                                <a class="btn btn-success " style="color:white;margin-right: 17px; ">Accepter</a>

                            </div>
                            <div>
                                <p class="font-weight-light text-dark ">MAHER</p>
                                <p class="font-weight-light text-dark ">Noureddine</p>
                                <p class="font-weight-light text-dark ">22 Ans</p>
                                <p class="font-weight-light text-dark ">Homme</p>
                                <p class="font-weight-light text-dark ">A+</p>
                                <p class="font-weight-light text-dark ">Rabat</p>
                                <a class="btn text-white " style="background-color: var(--Rouge); ">Refuser</a>
                            </div>
                        </div>
                    </div>
                    </section>

                    <!-- end section -->


                    <!-- start section table  -->
                    <section class="tableau-patient">

        <h3 class=" container  mb-0">LEs DONNATEURS
            <span class="badge badge-pill badge-danger text-uppercase fs-3" style="font-size: 23px;" ">5 DONNATEURS</span>
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
                                            <th></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>

                                            <td class="font-weight-light"> <small>NOUREDDINE</small></td>
                                            <td><small>MAHER</small></td>
                                            <td ><small>HAY ABI REGREG RUE 20</small></td>
                                            <td><small>RABAT</small></td>
                                            <td ><small>Noureddinemaher13@gmail.com</small></td>
                                            <td class="col-2"><small>+212 6 23 32 94 76</small></td>
                                            <td class="text-danger"><small>A+</small></td>
                                            <td><small>23-05-2000</small></td>
                                            <td><a href="delete">Delete</a></td>
                                            </tr>
                                            <tr>

                                            <td > <small>NOUREDDINE</small></td>
                                            <td ><small>MAHER</small></td>
                                            <td ><small>HAY ABI REGREG RUE 20</small></td>
                                            <td ><small>RABAT</small></td>
                                            <td ><small>Noureddinemaher13@gmail.com</small></td>
                                            <td class="col-2"><small>+212 6 23 32 94 76</small></td>
                                            <td class="text-danger"><small>A+</small></td>
                                            <td ><small>23-05-2000</small></td>
                                            <td><a href="delete">Delete</a></td>

                                            </tr>
                                            <tr>

                                            <td> <small>NOUREDDINE</small></td>
                                            <td><small>MAHER</small></td>
                                            <td><small>HAY ABI REGREG RUE 20</small></td>
                                            <td><small>RABAT</small></td>
                                            <td><small>Noureddinemaher13@gmail.com</small></td>
                                            <td class="col-2"><small>+212 6 23 32 94 76</small></td>
                                            <td class="text-danger"><small>A+</small></td>
                                            <td><small>23-05-2000</small></td>
                                            <td><a href="delete">Delete</a></td>

                                            </tr>
                                            <tr>

                                            <td> <small>NOUREDDINE</small></td>
                                            <td><small>MAHER</small></td>
                                            <td><small>HAY ABI REGREG RUE 20</small></td>
                                            <td><small>RABAT</small></td>
                                            <td><small>Noureddinemaher13@gmail.com</small></td>
                                            <td class="col-2"><small>+212 6 23 32 94 76</small></td>
                                            <td class="text-danger"><small>A+</small></td>
                                            <td><small>23-05-2000</small></td>
                                            <td><a href="delete">Delete</a></td>

                                            </tr>
                                            <tr>

                                            <td> <small>NOUREDDINE</small></td>
                                            <td><small>MAHER</small></td>
                                            <td><small>HAY ABI REGREG RUE 20</small></td>
                                            <td><small>RABAT</small></td>
                                            <td><small>Noureddinemaher13@gmail.com</small></td>
                                            <td class="col-2"><small>+212 6 23 32 94 76</small></td>
                                            <td class="text-danger"><small>A+</small></td>
                                            <td><small>23-05-2000</small></td>
                                            <td><a href="delete">Delete</a></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
    </section>
            <!-- end section table  -->
</body>

</html>