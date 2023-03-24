
<?php include('wifi/sp_func.php') ?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"/>

      <!-- fonts cdns -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

      <title>Hello, world!</title>

      <!-- css link  -->
      <link rel="stylesheet" href="style.css">

      <!-- jquery cdn -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <style>
      
      .spinner-border{
        display: none;
      }

      </style>

   </head>
   <body>



      <!-- header -->
      
      <div class="border-bottom">
        <div class="container">
          <header class="d-flex flex-wrap justify-content-center py-3  ">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <span class="fs-4">Distacke Solutions</span>
            </a>
            <ul class="nav mx-5">
              <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Report an issue</a></li>
            </ul>
          </header>
        </div>
      </div>




       <div class="container ">

         <div class="my-5">
            <h2>Prepare the device</h2>
            <p style="font-size: 17px;" class="text-secondary">for a new smart exprience</p>
         </div>
         <hr class="hl_row mb-3">


         <div class="row">
           <div class="col-md-4 my-3" >
                <div class="side_steps" >
                  <a href="step_1.html" class="text-decoration-none">
                      <div class="step_card is_active border text-start my-3">
                          <div class="card-body  d-flex align-items-center">
                              <i class="material-icons text-secondary fs-1">router</i>
                              <div class="d-flex mx-3 align-items-center w-100">
                                  <div class="w-75 text-white">
                                      <h5 class="p-0 m-0">Step 1</h5>
                                      <p class="p-0 m-0">Connect to network</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>

                    <div class="step_card  border bg-white text-start my-3">
                      <div class="card-body  d-flex align-items-center">
                            <i class="material-icons text-secondary fs-1">event_available</i>
                            <div class="d-flex mx-3 align-items-center w-100">
                                <div class="w-75 text-white">
                                  <h5 class="text-secondary p-0 m-0">Step 2</h5>
                                  <p class="text-secondary p-0 m-0">System availability</p>
                                </div>
                            </div>
                      </div>
                    </div>

                  <div class="step_card border bg-white text-start my-3">
                      <div class="card-body  d-flex align-items-center">
                          <i class="material-icons text-secondary fs-1">update</i>
                          <div class="d-flex mx-3 align-items-center w-100">
                              <div class="w-75 text-white">
                                  <h5 class="text-secondary p-0 m-0">Step 3</h5>
                                  <p class="text-secondary p-0 m-0">Update setup version</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="step_card  border bg-white text-start my-3">
                      <div class="card-body  d-flex align-items-center">
                          <i class="material-icons text-secondary fs-1">laptop_mac</i>
                          <div class="mx-3 text-white">
                              <h5 class="text-secondary p-0 m-0">Step 4</h5>
                              <p class="text-secondary p-0 m-0">Initialize the mirror</p>
                          </div>
                      </div>
                  </div>

                </div>
           </div>


           <div class="col-md-8 my-3">
              <div class="p-3">
                 <h3 >Step 1</h3>
                  <p class="text-secondary p-0 m-0">Connect to network</p>

                  <!-- all networks -->
                  <?php
                    $count_id = 1;
                    foreach ($array as $key => $value) {
                    $count_id++;
                  ?>
                    <div class="accordion my-3 " id="accordionExample">
                      <div class="accordion-item border network_card rounded-3 bg-light ">
                      <h2 class="accordion-header" id="headingOne">
                        <div class="p-3" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php echo $count_id?>" aria-expanded="true" aria-controls="collapseOne<?php echo $count_id?>">
                          <h5 class="p-0 m-0" id="ssid-<?php echo $count_id ?>"> <?php echo $value['ssid'] ?> </h5>
                        </div>
                      </h2>
                      
                      <div id="collapseOne<?php echo $count_id?>" class="accordion-collapse collapse border-0" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-0">
                          <div class="row">
                            <div class="col-md-10 ">
                              <input type="email" name="" class="form-control" id="pass-<?php echo $count_id?>">
                            </div>
                            <div class="col-md-2 ">
                              <button class="btn btn-primary" onclick="showPass(<?php echo $count_id ?>)"> 
                              <span class="spinner-border spinner-border-sm" id="spinner-border<?php echo $count_id ?>" role="status" aria-hidden="true"></span>
                              <span class="visually-hidden">Loading...</span>
                              Connect
                            </button>
                            </div> 
                          </div>
                          <!-- show password -->
                          <div class="mt-3 form-check">
                            <input type="checkbox"  class="form-check-input" id="exampleCheck<?php echo $count_id?>">
                            <label class="form-check-label" for="exampleCheck<?php echo $count_id?>">show password</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <?php 
                  }
                ?>
                 

                <a class="btn btn-primary my-3" href="step_2.html">
                  Next
                </a>

               </div>
           </div>
         </div>
       </div>
      



      
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
         crossorigin="anonymous"
      ></script>


      <!-- scripts link -->
      <script src="script/step_1.js"></script>

   </body>
</html>