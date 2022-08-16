
<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: information.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Information</title>
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
     <?php require('navbar.php');?>


      <!--Section: Newsfeed-->
      <div class="bg-dark">
        <div class="container">
          <div class="p-5 mb-4 bg-light rounded-3">
           <div class="container-fluid py-5">
             <h1 class="display-5 fw-bold">Custom jumbotron</h1>
             <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
             <button class="btn btn-primary btn-lg" type="button">Example button</button>
           </div>
         </div>

         <div class="row align-items-md-stretch">
           <div class="col-md-6">
             <div class="h-100 p-5 bg-light border rounded-3">
               <h2>Add borders</h2>
               <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
               <button class="btn btn-outline-secondary" type="button">Example button</button>
             </div>
           </div>
           <div class="col-md-6">
             <div class="h-100 p-5 bg-light border rounded-3">
               <h2>Add borders</h2>
               <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
               <button class="btn btn-outline-secondary" type="button">Example button</button>
             </div>
           </div>
         </div>
        </div>
      </div>

      <div class=" d-flex justify-content-center bg-dark">

        <section>
          <div class="newscard card">
            <div class="card-body">
              <!-- Data -->
              <div class="d-flex mb-3">

                <div>
                  <a href="" class="text-dark mb-0">
                    <strong>Heading</strong>
                  </a>
                  <a href="" class="text-muted d-block" style="margin-top: -6px">
                    <small>Time Stamp</small>
                  </a>
                </div>
              </div>
              <!-- Media -->
              <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
              </div>
              <!-- Media -->
              <!-- Description -->
              <div>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Atque ex non impedit corporis sunt nisi nam fuga
                  dolor est, saepe vitae delectus fugit, accusantium qui
                  nulla aut adipisci provident praesentium?
                </p>
              </div>
            </div>
          </div>
          <div class="newscard card" >
            <div class="card-body">
              <!-- Data -->
              <div class="d-flex mb-3">

                <div>
                  <a href="" class="text-dark mb-0">
                    <strong>Heading</strong>
                  </a>
                  <a href="" class="text-muted d-block" style="margin-top: -6px">
                    <small>Time Stamp</small>
                  </a>
                </div>
              </div>
              <!-- Media -->
              <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
              </div>
              <!-- Media -->
              <!-- Description -->
              <div>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Atque ex non impedit corporis sunt nisi nam fuga
                  dolor est, saepe vitae delectus fugit, accusantium qui
                  nulla aut adipisci provident praesentium?
                </p>
              </div>
            </div>
          </div>
          <div class="newscard card">
            <div class="card-body">
              <!-- Data -->
              <div class="d-flex mb-3">

                <div>
                  <a href="" class="text-dark mb-0">
                    <strong>Heading</strong>
                  </a>
                  <a href="" class="text-muted d-block" style="margin-top: -6px">
                    <small>Time Stamp</small>
                  </a>
                </div>
              </div>
              <!-- Media -->
              <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                <img src="" class="w-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                </a>
              </div>
              <!-- Media -->
              <!-- Description -->
              <div>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Atque ex non impedit corporis sunt nisi nam fuga
                  dolor est, saepe vitae delectus fugit, accusantium qui
                  nulla aut adipisci provident praesentium?
                </p>
              </div>
            </div>
          </div>
        </section>
     </div>

  </body>
  <?php require('footer.php');?>

</html>
