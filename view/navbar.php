<?php require "libs.php"; ?>
<nav class="navbar navbar-dark bg-primary navbar navbar-expand-lg">
  <!-- Navbar content -->
   <div class="container-fluid">
    <img src="../image/icones.png" id="logo" class="navbar-brand">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Autocompletion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">DataTable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Reporting FPDF</a>
        </li>
      </ul>
      <span class="d-flex navbar-text nav justify-content-end">
        <img src="../image/icones.png" id="logo" class="orm-control me-2">
       <h5>welcome  ssi</h5>
       <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>

         </li>
       </ul>

     </span>
    </div>
  </div>
</nav>

<style type="text/css">
  #logo{
    height: 3%;
    width: 3%;
  }
  h5{
    color: white;
  }


</style>