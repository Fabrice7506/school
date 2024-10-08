<?php 
  include('header.php');
?>

<nav class="navbar navbar-expand-lg mx-4 my-3 p-2 fixed-top " style="background-color: #0093E9;
background-image: linear-gradient(32deg, #0093E9 0%, #80D0C7 100%); border-radius:300px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

  <div class="container-fluid">
    <a class="navbar-brand" href="../view/index.php" style="font-family: 'Nerko One', cursive;
  font-weight: 500;
  font-style: normal; font-size:40px;" > CampusFlow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" style=" font-family: 'Poppins', sans-serif; font-weight: 500;" aria-current="page" href="../view/students.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " style=" font-family: 'Poppins', sans-serif; font-weight: 500;" aria-current="page" href="../view/Cours.php">Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" style=" font-family: 'Poppins', sans-serif; font-weight: 500;" aria-current="page" href="../view/classe.php">Classe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" style=" font-family: 'Poppins', sans-serif; font-weight: 500;" aria-current="page" href="../view/teacher.php">Professeurs</a>
        </li><li class="nav-item">
          <a class="nav-link text-white" style=" font-family: 'Poppins', sans-serif; font-weight: 500;" aria-current="page" href="../view/comptabilité.php">Comptabilité</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>