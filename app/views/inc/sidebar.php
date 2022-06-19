 <!-- side bar  -->

 
 <div class="container-fluid overflow-hidden ">
        <div class="row flex-nowrap ">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 position-fixed top-0 px-0 bg-dark  " style="
            height: 100vh;width:230px; z-index:2;">

                <div class=" d-flex flex-column justify-content-around align-items-center px-3 pt-2 text-white ps-5 ">
                   
                    <div class="d-flex flex-column align-items-center mt-3">
                        <img src="<?php echo URLROOT; ?>/assets/img/img.jpg " alt="hugenerd " width="70 " height="70 " class="rounded-circle mt-1 ">
                        <h4 class="text-white mt-3 h6 " style="font-size: 14px; "> <b><?php echo $_SESSION['Name'];?>
</b></h4>

                        <p class="text-danger mb-5 " style="font-size: 10px; ">Admin</p>
                    </div>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start  " id="menu ">
                    <li class="nav-item mb-4 side-hover" style="font-size: 16px; ">
                            <a href="<?php echo URLROOT;?>./Admins/showStatistiques" class="btn align-middle  ">
                            <img src="<?php echo URLROOT; ?>/assets/img/home.png " alt="homeicone" >
                                <h2 class="ms-1 d-none d-sm-inline mt-4 text-white " style="font-size:10px; ">Home</h2>
                            </a>
                        </li>
                        <li class="nav-item mb-4 side-hover " style="font-size: px; ">
                            <a href="<?php echo URLROOT;?>./donnateurs/showDonnateurs" class="btn align-middle  " >
                                <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-arrow-up-right-circle-fill text-danger " viewBox="0 0 16 16 ">
                                    <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z "/>
                                  </svg>
                                <h2 class="ms-1 d-none d-sm-inline mt-4 text-white " style="font-size:10px; ">Donnateurs</h2>
                            </a>
                        </li>
                        
                        <li class="mb-3 side-hover ">
                            <a href="<?php echo URLROOT;?>./messages/adminmsg" data-bs-toggle="collapse " class="btn align-middle text-dark ">
                                <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-chat-left-dots-fill text-danger " viewBox="0 0 16 16 ">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z "/>
                                  </svg>
                                <h2 class="ms-1 d-none d-sm-inline mt-4 text-white " style="font-size:10px; ">Messages</h2>
                            </a>

                        </li>
                        <li class="mb-3 side-hover">
                            <a href="<?php echo URLROOT;?>./pubs/showpubs" data-bs-toggle="collapse " class="btn align-middle text-dark ">
                                <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-pen text-danger " viewBox="0 0 16 16 ">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5
                0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z "/>
                                  </svg>
                                <h2 class="ms-1 d-none d-sm-inline mt-4 text-white " style="font-size:10px; ">Publications</h2>
                            </a>

                        </li>

                        <li class="mb-5 side-hover ">
                            <a href="<?php echo URLROOT;?>./patients/showpatients" data-bs-toggle="collapse " class="btn align-middle text-dark ">
                                <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-hourglass-bottom text-danger " viewBox="0 0 16 16 ">
                                    <path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5
                4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5zm2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702s.18.149.5.149.5-.15.5-.15v-.7c0-.701.478-1.236 1.011-1.492A3.5 3.5 0 0 0 11.5 3V2h-7z "/>
                                  </svg>
                                <h2 class="ms-1 d-none d-sm-inline mt-4 text-white " style="font-size:10px; ">Patients</h2>
                            </a>

                        </li>
                        <li class=" side-hover mt-2">
                            <a href="<?php echo URLROOT;?>./Admins/logout" data-bs-toggle="collapse " class="btn text-dark ">
                                <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-box-arrow-right text-danger " viewBox="0 0 16 16 ">
                                    <path fill-rule="evenodd " d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5
                0 0 0-1 0v2z "/>
                                    <path fill-rule="evenodd " d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z "/>
                                  </svg>

                                <h2 class="ms-1 d-none d-sm-inline text-white " style="font-size:10px;padding-bottom: 30px; "> Se Déconnecter
                                </h2>
                            </a>
                        </li>
                </div>
            </div>
            <!-- end side bar -->
            