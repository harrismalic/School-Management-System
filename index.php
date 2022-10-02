<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <title>School Management</title>
</head>
<body>
   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
       
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="#"><b>SMS</b></a>
        </li>  
      <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      
    </div>
    

  </div>
  
</nav>
<!-- Navbar --> 

<div class="d-flex shadow" style="height: 500px; background: linear-gradient(-45deg, navy 48%, transparent 48%);">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3">
                    <b>School Management System</b>
                </h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, at? Eligendi pariatur, porro aspernatur esse maiores veritatis exercitationem doloremque impedit consequuntur nostrum. 
                </p>
                <a href="" class="btn btn-lg btn-primary">Call to Action</a>                 
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow">
                    <div class="card-body">
                        <h3>
                            Addmission Form
                        </h3>
                        <form action="" method="post">
                            <div class="form-outline">
                                <input type="text" id="formControlLg" class="form-control form-control-lg" />
                                <label class="form-label" for="formControlLg">Your Name</label>
                            </div>
                            <br>
                            <div class="form-outline">
                                <input type="email" id="formControlLg" class="form-control form-control-lg" />
                                <label class="form-label" for="email">Your Email</label>
                            </div>
                            <br>
                            <div class="form-outline">
                                <input type="Mobile" id="formControlLg" class="form-control form-control-lg" />
                                <label class="form-label" for="Mobile">Phone No</label>
                            </div>
                            <br>
                            <div class="form-outline">
                                <input type="text" id="formControlLg" class="form-control form-control-lg" />
                                <label class="form-label" for="class">Your Class</label>
                            </div>
                            <br>
                            <button class="btn btn-primary btn-block">Submit Form</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </di>
</div>
</div>

<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="">Our Courses</h2>
        <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <?php 
            for ($i=0; $i < 12; $i++) { ?>       
            
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <div>
                        <img src="./assets/images/a1.jpg" alt="" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <b>SEO</b>
                        <p class="card-text">
                            <b>Duration: </b> 10 hours <br>
                            <b>Price: </b> 5000./ Rs
                        </p>
                        <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                    </div>
                </div>
                
            </div>
            <?php    
            }
            ?>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="text-center mb-5">
        <h2 class="">Our Teachers</h2>
        <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
    </div>
</section>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
    ></script>
</body>
</html>