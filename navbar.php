
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
 <div class="container-fluid">
   <a class="navbar-brand" href="#">HGE</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="index.php">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="information.php">Information</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="gallary.php">Gallary</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="contact.php">Contact</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="featured.php">Featured</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Services
         </a>
         <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="wanted.php">Wanted</a></li>
           <li><hr class="dropdown-divider"></li>
           <li><a class="dropdown-item" href="workshop.php">Workshop</a></li>
         </ul>
       </li>
       <li class="nav-item">
         <?php echo "<a class='nav-link disabled'>" . $_SESSION['username'] . "</a>"; ?>
       </li>
     </ul>
     <form class="d-flex" role="search">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-warning" type="submit">Search</button>
     </form>
   </div>
 </div>
</nav>
