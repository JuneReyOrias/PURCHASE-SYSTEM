<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed

   
    $page_title = 'Upress | Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
    require_once '../includes/sidebar.php';
?>
<section class="home-dash ms-5"style="left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>

                  
                </div>
               

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="lefte ms-lg-3" href="addcustomer.php">Home</a>
        <a href="#contact">Admin</a>
        <a href='#contact us'>Hola!</a><br>
        <div class="ser-center fs-2 " >

        <span></span></div> 
</div>
</div>
<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">
        
        <div class="home-content">
        <div class="overview-boxes ms-lg-5" >
            <div class="box ms-lg-5 " style= "margin-left:23px;">
                <div class="right-side">
                    <div class="box-topic ms-lg-3" class="btn-1">Printing</div> </br>
                    <div class="number">Printing is a process for mass reproducing text and images using a master form or template.</div>
                    
                    </div>
                </div>

                <div class="box">
                <div class="center">
                    <div class="box-topic" class="btn-1">Layout</div></br>
                    <div class="number">The act or process of planning or laying out in detail.</div>
                    
                    </div>
                </div>
                
               
            <div class="box">
                <div class="left-side">
                    <div class="box-topic" class="btn-1">Binding</div></br>
                    <div class="number">A strong covering holding the pages of a book together</div>
                    
                    </div>
                    
                </div>

                <div class="box">
                <div class="left-side">
                    <div class="box-topic" class="btn-1">Binding</div></br>
                    <div class="number">A strong covering holding the pages of a book together</div>
                    
                    </div>
                    
                </div>

                <div class="box justify-content-center">
                <div class="left-side">
                    <div class="box-topic" class="btn-1">Binding</div></br>
                    <div class="number">A strong covering holding the pages of a book together</div>
                    
                    </div>
                    
                </div>
                <section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-black">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img1.webp"
            class="card-img-top" alt="iPhone" />
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">iPhone X</h4>
              <h6 class="text-primary mb-1 pb-3">Starting at $399</h6>
            </div>

            <div class="text-center">
              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Quick Look</h5>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">5.8″</span>
                <span>Super Retina HD display1</span>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <ul class="list-unstyled mb-0">
                  <li aria-hidden="true">—</li>
                  <li>Wide</li>
                  <li>Telephoto</li>
                  <li aria-hidden="true">—</li>
                </ul>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">2x</span>
                <span>Optical zoom range</span>
              </div>

              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Capacity</h5>
              </div>

              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">64GB</span>
                <span class="mb-2">256GB</span>
                <span style="color: transparent;">0</span>
              </div>
            </div>

            <div class="d-flex flex-row">
              <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button>
              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card text-black">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img2.webp"
            class="card-img-top" alt="iPhone" />
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">iPhone 11</h4>
              <h6 class="text-primary mb-1 pb-3">Starting at $499</h6>
            </div>

            <div class="text-center">
              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Quick Look</h5>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">6.1″</span>
                <span>Liquid Retina HD display1</span>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <ul class="list-unstyled mb-0">
                  <li aria-hidden="true">Ultra Wide</li>
                  <li>Wide</li>
                  <li aria-hidden="true">—</li>
                  <li aria-hidden="true">—</li>
                </ul>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">2x</span>
                <span>Optical zoom range</span>
              </div>

              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Capacity</h5>
              </div>

              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">64GB</span>
                <span class="mb-2">128GB</span>
                <span>256GB</span>
              </div>
            </div>

            <div class="d-flex flex-row">
              <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button>
              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card text-black">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img3.webp"
            class="card-img-top" alt="iPhone" />
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">iPhone 11 Pro</h4>
              <h6 class="text-primary mb-1 pb-3">Starting at $599</h6>
            </div>

            <div class="text-center">
              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Quick Look</h5>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">5.8″</span>
                <span>Super Retina HD display1</span>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <ul class="list-unstyled mb-0">
                  <li aria-hidden="true">Ultra Wide</li>
                  <li>Wide</li>
                  <li>Telephoto</li>
                  <li aria-hidden="true">—</li>
                </ul>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">4x</span>
                <span>Optical zoom range</span>
              </div>

              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Capacity</h5>
              </div>

              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">64GB</span>
                <span class="mb-2">256GB</span>
                <span>512GB</span>
              </div>
            </div>

            <div class="d-flex flex-row">
              <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button>
              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <div>
</section>

